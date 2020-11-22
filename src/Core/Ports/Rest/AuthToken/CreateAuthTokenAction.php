<?php

declare(strict_types=1);

namespace App\Core\Ports\Rest\AuthToken;

use App\Core\Application\Command\AuthToken\CreateAuthToken\CreateAuthTokenCommand;
use App\Shared\Infrastructure\Http\HttpSpec;
use App\Shared\Infrastructure\Http\ParamFetcher;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;

final class CreateAuthTokenAction
{
    use HandleTrait;

    public function __construct(MessageBusInterface $commandBus)
    {
        $this->messageBus = $commandBus;
    }

    /**
     * @Route("/api/login_check", name="login_check", methods={"POST"})
     * @OA\Get(
     *     path="/api/login_check",
     *     tags={"User"},
     *     summary="Operations about user",
     *     @OA\Parameter(
     *          name="username",
     *          in="query",
     *          description="The username for login",
     *          required=true,
     *          @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *          name="password",
     *          in="query",
     *          description="The password for login in clear text",
     *          required=true,
     *          @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Successfull login",
     *     @OA\JsonContent(
     *         @OA\Property(property="token", type="apiKey", example="The token needed for requesting secure endpoints.") 
     *          ),
     *     ),
     *     @OA\Response(
     *         response="401",
     *         description="Invalid username/password supplied",
     *     @OA\JsonContent(
     *         @OA\Property(property="code", type="string", example="401"), 
     *         @OA\Property(property="message", type="string", example="Access denied.") 
     *          ),
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Page not found",
     *     @OA\JsonContent(
     *         @OA\Property(property="code", type="string", example="400"), 
     *         @OA\Property(property="message", type="string", example="Page not found") 
     *          ),
     *     ),
     * )
     * @param Request $request
     *
     * @return Response
     *
     */
    public function __invoke(Request $request): Response
    {
        $paramFetcher = ParamFetcher::fromRequestBody($request);

        $token = $this->handle(new CreateAuthTokenCommand(
            $paramFetcher->getRequiredString('username'),
            $paramFetcher->getRequiredString('password')
        ));

        return new JsonResponse(['token' => $token], Response::HTTP_CREATED);
    }
}
