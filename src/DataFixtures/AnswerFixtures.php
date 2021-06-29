<?php


namespace App\DataFixtures;


use App\Entity\Answer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AnswerFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 100; $i++) {

            for ($q = 1; $q < 10; $q++) {

                $answer = new Answer();
                $answer->setUser($this->getReference('user_' . $i));
                $answer->setQuestion($this->getReference('question_' . rand(1,10)));
                if ($q < 5) {
                    $answer->setAnswer(rand(0, 1));
                } else {
                    $answer->setAnswer(rand(0, 3));
                }

                $manager->persist($answer);
            }
        }
        $manager->flush();
    }

    public function getDependencies() :array
    {
        return [
            UserFixtures::class,
            QuestionFixtures::class,
        ];
    }
}
