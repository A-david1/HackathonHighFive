<?php


namespace App\DataFixtures;


use App\Entity\ResultMatching;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ResultMatchingFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        for($i = 1; $i < 17; $i++){
            for($j = 1; $j < 17; $j++){
                $resultMatching = new ResultMatching();
                $resultMatching->addMentor($this->getReference('user_' . $i));
                $resultMatching->addApprentice($this->getReference('user_' . $j));
                $resultMatching->setIsMatch(rand(1,100));
                $manager->persist($resultMatching);
            }
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}
