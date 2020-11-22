<?php

declare(strict_types=1);

namespace App\Core\Ports\Rest\Parcel;

use App\Core\Application\Query\Parcel\DTO\ParcelDTO;
use App\Core\Application\Query\Parcel\GetParcel\GetParcelQuery;
use App\Shared\Infrastructure\Http\HttpSpec;
use App\Shared\Infrastructure\Http\ParamFetcher;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use OpenApi\Annotations as OA;

final class GetParcelAction
{
    use HandleTrait;

    private NormalizerInterface $normalizer;

    public function __construct(MessageBusInterface $queryBus, NormalizerInterface $normalizer)
    {
        $this->messageBus = $queryBus;
        $this->normalizer = $normalizer;
    }

    /**
     * @Route("/api/parcels/{trackingId}", methods={"GET"}, name="api_get_parcel")
     * @OA\SecurityScheme(bearerFormat="JWT", type="apiKey", securityScheme="bearer", in="header", name="Token")
     * @OA\Get(
     *     path="/api/parcels/{trackingId}",
     *     tags={"Parcels"},
     *     security={"bearer"},
     *     summary="Find parcel by tracking ID",
     *     @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="Tracking ID of parcel to return",
     *          required=true,
     *          @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="A parcel finded by the tracking ID",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Parcel")),
     *     ),
     *   @OA\Response(
     *     response="401",
     *     description="JWT Token not found",
     *     @OA\JsonContent(
     *         @OA\Property(property="code", type="string", example="401"),
     *         @OA\Property(property="message", type="string", example="JWT Token not found") 
     *      )
     *   ),
     *   @OA\Response(
     *     response="400",
     *     description="Page not found",
     *     @OA\JsonContent(
     *         @OA\Property(property="code", type="string", example="400"),
     *         @OA\Property(property="message", type="string", example="Page not found") 
     *      )
     *   ),
     * )
     *
     * @param Request $request
     *
     * @return Response
     *
     */

    public function __invoke(Request $request): Response
    {
        $route = ParamFetcher::fromRequestAttributes($request);

        $parcel = $this->handle(new GetParcelQuery($route->getNullableString('trackingId')));

        return new JsonResponse(
            $this->normalizer->normalize($parcel),
        );
    }
}
