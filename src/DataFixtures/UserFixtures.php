<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;

class UserFixtures extends Fixture

{
    private $encoder;
    public function __construct(UserPasswordHasherInterface $encoder){
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $user=new User();
        $user->setUsername('toto');
        $user->setPassword($this->encoder->hashPassword($user, 'toto'));

        $manager->persist($user);

        $manager->flush();
    }
}
