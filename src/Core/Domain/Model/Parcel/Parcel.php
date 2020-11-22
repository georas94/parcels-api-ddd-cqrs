<?php

declare(strict_types=1);

namespace App\Core\Domain\Model\Parcel;

use App\Shared\Domain\Exception\BusinessLogicViolationException;
use App\Shared\Domain\Model\Aggregate;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;


/**
 * @ORM\Entity()
 * @ORM\Table(indexes={@ORM\Index(name="parcel_status_idx", columns={"status"})})
 * @OA\Schema()
 */
class Parcel extends Aggregate
{
    use ParcelGS;

    public const MIN_TITLE_LENGTH = 5;
    public const MAX_TITLE_LENGTH = 100;
    public const MAX_DESCRIPTION_LENGTH = 100;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", options={"unsigned"=true})
     * @OA\Property(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @OA\Property(type="string")
     */
    private string $trackingId;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @OA\Property(type="string")
     */
    private string $carrier;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @OA\Property(type="string")
     */
    private string $status;


    /**
     * @ORM\Column(type="datetime_immutable", nullable=false)
     * @OA\Property(type="string", format="date-time")
     * 
     */
    private \DateTimeImmutable $shippingDate;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=false)
     * @OA\Property(type="string", format="date-time")
     */
    private \DateTimeImmutable $createdAt;

    public function __construct(string $trackingId, \DateTimeImmutable $shippingDate, string $carrier, string $status)
    {
        $this->setTrackingId($trackingId);
        $this->setShippingDate($shippingDate);
        $this->setCarrier($carrier);
        $this->setStatus($status);
        $this->setCreatedAt(new \DateTimeImmutable());

        $this->raise(new ParcelCreatedEvent($this));
    }


}
