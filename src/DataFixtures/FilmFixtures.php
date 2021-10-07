<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Film;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $element=new Film();
        $element->setTitre('5ème élément');
        $element->setDescription('Incontestablkement dans le top ten des films.');
        $element->setRealisateur('Luc Besson');
        $manager->persist($element);

        $sda=new Film();
        $sda->setTitre('Le seigneur des anneaux');
        $sda->setDescription('La meilleure trilogie de tous les temps!!!!');
        $sda->setRealisateur('Peter Jackson');
        $manager->persist($sda);

        $matrix=new Film();
        $matrix->setTitre('Matrix');
        $matrix->setDescription('Bientôt le 4?');
        $matrix->setRealisateur('Lana et Lilly Wachowski');
        $manager->persist($matrix);

        $manager->flush();
    }
}
