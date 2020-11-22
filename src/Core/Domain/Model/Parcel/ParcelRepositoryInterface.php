<?php

declare(strict_types=1);

namespace App\Core\Domain\Model\Parcel;

interface ParcelRepositoryInterface
{
    public function find(string $trackingId): ?Parcel;

    public function add(Parcel $parcel): void;

}
