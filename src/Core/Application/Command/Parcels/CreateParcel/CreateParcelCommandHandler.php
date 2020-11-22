<?php

declare(strict_types=1);

namespace App\Core\Application\Command\Parcels\CreateParcel;

use App\Core\Domain\Model\Parcel\Parcel;
use App\Core\Domain\Model\Parcel\ParcelRepositoryInterface;
use App\Core\Domain\Model\User\UserFetcherInterface;

final class CreateParcelCommandHandler
{
    private ParcelRepositoryInterface $parcelRepository;

    private UserFetcherInterface $userFetcher;

    public function __construct(ParcelRepositoryInterface $parcelRepository, UserFetcherInterface $userFetcher)
    {
        $this->parcelRepository = $parcelRepository;
        $this->userFetcher = $userFetcher;
    }

    public function __invoke(CreateParcelCommand $command): int
    {
        $user = $this->userFetcher->fetchRequiredUser();

        $parcel = new Parcel($command->getTrackingId(), $command->getShippingDate(), $user, $command->getCarrier());
        $this->parcelRepository->add($parcel);

        return $parcel->getId();
    }
}
