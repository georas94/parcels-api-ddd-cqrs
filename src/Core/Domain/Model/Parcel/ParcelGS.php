<?php

declare(strict_types=1);

namespace App\Core\Domain\Model\Parcel;

use App\Shared\Domain\Service\Assert\Assert;

trait ParcelGS
{
    public function getId(): int
    {
        return $this->id;
    }

    public function getTrackingId(): string
    {
        return $this->trackingId;
    }

    public function getShippingDate(): \DateTimeImmutable
    {
        return $this->shippingDate;
    }


    public function getCarrier(): string
    {
        return $this->carrier;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    private function setTrackingId(string $trackingId): void
    {
        $this->trackingId = $trackingId;
    }

    private function setCarrier(string $carrier): void
    {
        $this->carrier = $carrier;
    }

    private function setStatus(string $status): void
    {
        $this->status = $status;
    }

    private function setShippingDate(\DateTimeImmutable $shippingDate): void
    {
        $shippingDateNormalized = $shippingDate->setTime(0, 0);
        $now = (new \DateTimeImmutable())->setTime(0, 0);
        $this->shippingDate = $shippingDateNormalized;
    }

    private function setCreatedAt(\DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
