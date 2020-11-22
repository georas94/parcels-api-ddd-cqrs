<?php

namespace App\DataFixtures;

use DateTime;
use DateTimeZone;
use DateTimeImmutable;
use App\Core\Domain\Model\User\User;
use Doctrine\Persistence\ObjectManager;
use App\Core\Domain\Model\Parcel\Parcel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Core\Domain\Model\User\UniqueUsernameSpecificationInterface;
use App\Core\Application\Command\Parcels\CreateParcel\CreateParcelCommand;


class ParcelsFixtures extends Fixture
{
    //Load a parcels in our database for testing purpose
    public function load(ObjectManager $manager)
    {
       
        $parcel = new Parcel("18292e08-953f-470f-beba-06daa24c0cc3", new \DateTimeImmutable("12-11-2020") ,"UTC Transports","shipped");
        $manager->persist($parcel);
        $manager->flush();  

    }
}
