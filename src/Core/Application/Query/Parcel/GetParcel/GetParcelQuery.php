<?php

declare(strict_types=1);

namespace App\Core\Application\Query\Parcel\GetParcel;

final class GetParcelQuery
{
    private string $trackingId;

    public function __construct(string $trackingId)
    {
        $this->trackingId = $trackingId;
    }

    public function getTrackingId(): string
    {
        return $this->trackingId;
    }
}
