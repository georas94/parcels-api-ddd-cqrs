<?php

declare(strict_types=1);

namespace App\Core\Application\Query\Parcel\DTO;

use App\Core\Domain\Model\Parcel\Parcel;

final class ParcelDTO
{
    private int $id;

    private string $trackingId;

    private string $carrier;

    private string $status;

    private \DateTimeImmutable $shippingDate;

    private \DateTimeImmutable $createdAt;

    public static function fromEntity(Parcel $parcel): ParcelDTO
    {
        $dto = new static();
        $dto->setId($parcel->getId());
        $dto->setTrackingId($parcel->getTrackingId());
        $dto->setCarrier($parcel->setCarrier());
        $dto->setStatus((string) $parcel->getStatus());
        $dto->setShippingDate($parcel->getShippingDate());
        $dto->setCreatedAt($parcel->getCreatedAt());

        return $dto;
    }

    /**
     * @param array<string, mixed> $data
     *
     * @return ParcelDTO
     */
    public static function fromQueryArray(array $data): ParcelDTO
    {
        if (!isset($data['id'], $data['trackingId'], $data['carrier'], $data['status'], $data['shippingDate'], $data['created_at'])) {
            throw new \InvalidArgumentException(sprintf('Not all keys are set or null %s', var_export($data, true)));
        }

        $dto = new static();
        $dto->setId((int) $data['id']);
        $dto->setTrackingId($data['trackingId']);
        $dto->setCarrier($data['carrier']);
        $dto->setStatus($data['status']);
        $dto->setshippingDate(new \DateTimeImmutable($data['shippingDate']));
        $dto->setCreatedAt(new \DateTimeImmutable($data['created_at']));

        return $dto;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTrackingId(): string
    {
        return $this->trackingId;
    }

    public function setTrackingId(string $trackingId): void
    {
        $this->trackingId = $trackingId;
    }

    public function getCarrier(): string
    {
        return $this->carrier;
    }

    public function setCarrier(string $carrier): void
    {
        $this->carrier = $carrier;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getShippingDate(): \DateTimeImmutable
    {
        return $this->shippingDate;
    }

    public function setShippingDate(\DateTimeImmutable $shippingDate): void
    {
        $this->shippingDate = $shippingDate;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
