<?php

declare(strict_types=1);

namespace App\Core\Application\Command\Parcels;

abstract class ParcelCommand
{
    protected string $trackingId;

    protected \DateTimeImmutable $shippingDate;

    protected string $carrier;

    public function __construct(string $trackingId, \DateTimeImmutable $shippingDate, string $carrier)
    {
        $this->trackingId = $trackingId;
        $this->shippingDate = $shippingDate;
        $this->carrier = $carrier;
    }

    public function getTrackingId(): string
    {
        return $this->trackingId;
    }

    public function getCarrier(): string
    {
        return $this->carrier;
    }

    public function getShippingDate(): \DateTimeImmutable
    {
        return $this->shippingDate;
    }
}
