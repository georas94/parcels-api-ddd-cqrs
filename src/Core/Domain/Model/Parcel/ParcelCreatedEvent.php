<?php

declare(strict_types=1);

namespace App\Core\Domain\Model\Parcel;

use App\Shared\Domain\Model\DomainEventInterface;

final class ParcelCreatedEvent implements DomainEventInterface
{
    private parcel $parcel;

    public function __construct(parcel $parcel)
    {
        $this->parcel = $parcel;
    }

    public function getparcel(): parcel
    {
        return $this->parcel;
    }
}
