<?php

declare(strict_types=1);

namespace App\Core\Application\Query\Parcel\GetParcel;

use App\Core\Domain\Model\Parcel\Parcel;
use Doctrine\ORM\EntityManagerInterface;
use App\Core\Application\Query\Parcel\DTO\ParcelDTO;
use App\Core\Domain\Model\User\UserFetcherInterface;
use App\Core\Infrastructure\Repository\ParcelRepository;
use App\Shared\Domain\Exception\AccessForbiddenException;
use App\Shared\Domain\Exception\ResourceNotFoundException;
use App\Core\Domain\Model\Parcel\ParcelRepositoryInterface;
use App\Core\Application\Query\Parcel\GetParcel\GetParcelQuery;

final class GetParcelQueryHandler
{
    private ParcelRepository $parcelRepository;

    public function __construct(EntityManagerInterface $em, ParcelRepository $parcelRepository)
    {
        $this->em = $em;
        $this->parcelRepository = $parcelRepository;

    }

    public function __invoke(GetParcelQuery $query): Parcel
    {
        

        $parcel = $this->parcelRepository->findUserByTrackingId($query->getTrackingId());

        if ($parcel === null) {
            throw new ResourceNotFoundException(sprintf('Parcel with tracking id "%s" not found', $query->getTrackingId()));
        }

        return $parcel;
    }
}
