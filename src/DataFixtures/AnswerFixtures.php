<?php


namespace App\DataFixtures;

use App\Entity\Answer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;


class AnswerFixtures extends Fixture implements DependentFixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $serializer = $this->container->get('serializer');
        $filepath = '/home/olivierjoubert/HackathonHighFive/assets/images/data/individual_data.csv';
        $data = $serializer->decode(file_get_contents($filepath), 'csv');

        for ($i = 1; $i <= 16; $i++) {

            $line = $data[$i-1];

            for ($j = 0; $j < 10; $j++) {
                $answer = new Answer();
                $answer->setUser($this->getReference('user_' . $i));
                echo($j);
                $answer->setQuestion($this->getReference('question_' . ($j + 1)));
                $answer->setAnswer($line['Q' . ($j+1)]);
                $manager->persist($answer);
            }

        }
        $manager->flush();
    }




/*    public function load(ObjectManager $manager)
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
    }*/

    public function getDependencies() :array
    {
        return [
            UserFixtures::class,
            QuestionFixtures::class,
        ];
    }
}
