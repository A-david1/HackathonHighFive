<?php


namespace App\DataFixtures;


use App\Entity\Choice;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ChoiceFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $choice = new Choice();
            $choice->setChoice1('The human side');
            $choice->setChoice2('Specifications');
            $choice->setChoice3('Technologies');
            $choice->setChoice4('The paycheck');
            $choice->setQuestion($this->getReference('question_1'));
            $manager->persist($choice);

            $choice = new Choice();
            $choice->setChoice1('Yes');
            $choice->setChoice2('No');
            $choice->setChoice3('Maybe');
            $choice->setChoice4('Why not ?');
            $choice->setQuestion($this->getReference('question_2'));
            $manager->persist($choice);

            $choice = new Choice();
            $choice->setChoice1('Persistent');
            $choice->setChoice2('Organized');
            $choice->setChoice3('Creative');
            $choice->setChoice4('Pragmatic');
            $choice->setQuestion($this->getReference('question_3'));
            $manager->persist($choice);

            $choice = new Choice();
            $choice->setChoice1('Linkedin');
            $choice->setChoice2('Facebook');
            $choice->setChoice3('Instagram');
            $choice->setChoice4('Twitter');
            $choice->setQuestion($this->getReference('question_4'));
            $manager->persist($choice);

            $choice = new Choice();
            $choice->setChoice1('Windows');
            $choice->setChoice2('Linux');
            $choice->setChoice3('Mac OS');
            $choice->setChoice4('Paper and pencil');
            $choice->setQuestion($this->getReference('question_5'));
            $manager->persist($choice);

            $choice = new Choice();
            $choice->setChoice1('Half empty');
            $choice->setChoice2('Half full');
            $choice->setQuestion($this->getReference('question_6'));
            $manager->persist($choice);

            $choice = new Choice();
            $choice->setChoice1('https://www.turbo.fr/sites/default/files/styles/article_690x405/public/2019-11/IMG_9420.jpg');
            $choice->setChoice2('https://www.autojournal.fr/wp-content/uploads/autojournal/2021/01/delorean_dmc-12_back_to_the_future_5-750x410.jpeg');
            $choice->setQuestion($this->getReference('question_7'));
            $manager->persist($choice);

            $choice = new Choice();
            $choice->setChoice1('Nomad');
            $choice->setChoice2('Sendentary');
            $choice->setQuestion($this->getReference('question_8'));
            $manager->persist($choice);

            $choice = new Choice();
            $choice->setChoice1('A duck');
            $choice->setChoice2('A rabbit');
            $choice->setQuestion($this->getReference('question_9'));
            $manager->persist($choice);

            $choice = new Choice();
            $choice->setChoice1('Day worker');
            $choice->setChoice2('Night worker');
            $choice->setQuestion($this->getReference('question_10'));
            $manager->persist($choice);

            $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            QuestionFixtures::class,
        ];
    }
}
