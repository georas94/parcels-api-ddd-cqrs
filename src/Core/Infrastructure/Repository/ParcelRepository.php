<?php

declare(strict_types=1);

namespace App\Core\Infrastructure\Repository;

use App\Core\Domain\Model\Parcel\Parcel;
use App\Core\Domain\Model\Parcel\ParcelRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

class ParcelRepository implements ParcelRepositoryInterface
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function find(string $trackingId): ?Parcel
    {
        return $this->em->find(Parcel::class, $trackingId);
    }
    public function findUserByTrackingId(string $trackingId): ?Parcel
    {
        return $this->em->createQueryBuilder()
            ->select('p')
            ->from(Parcel::class, 'p')
            ->where('p.trackingId = :trackingId')
            ->setParameters(['trackingId' => $trackingId])
            ->getQuery()->getOneOrNullResult();
    }

    public function add(Parcel $parcel): void
    {
        $this->em->persist($parcel);
        $this->em->flush();
    }

}
