<?php

namespace App\DataFixtures;

use App\Core\Domain\Model\User\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersFixtures extends Fixture
{
    private $passwordEncoder;
    
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    
    //Load a user with a CLI-hashed password in our database for testing purpose
    public function load(ObjectManager $manager)
    {
        $user = new User("panda", '$argon2id$v=19$m=65536,t=4,p=1$QdDRfeL0HkWxg2eXp+EfZw$4KbtscGYDlEBF9QP7ELXhhT5j1f1WuLyzPiv+2X2p9A');
        $manager->persist($user);
        $manager->flush();        

    }
}
