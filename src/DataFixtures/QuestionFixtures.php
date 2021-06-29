<?php


namespace App\DataFixtures;


use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class QuestionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $question = new Question();
            $question->setContent('What is your priority in choosing a freelance project ?');
            $this->addReference('question_1', $question);
            $manager->persist($question);

            $question = new Question();
            $question->setContent('You prefer to hear...');
            $this->addReference('question_2', $question);
            $manager->persist($question);

            $question = new Question();
            $question->setContent('In terms of quality, you would rather see yourself as...');
            $this->addReference('question_3', $question);
            $manager->persist($question);

            $question = new Question();
            $question->setContent('What\'s your favorite social network ?');
            $this->addReference('question_4', $question);
            $manager->persist($question);

            $question = new Question();
            $question->setContent('What preference in your work tool ?');
            $this->addReference('question_5', $question);
            $manager->persist($question);

            $question = new Question();
            $question->setContent('You rather see the glass...');
            $this->addReference('question_6', $question);
            $manager->persist($question);

            $question = new Question();
            $question->setContent('Which car would you choose ?');
            $this->addReference('question_7', $question);
            $manager->persist($question);

            $question = new Question();
            $question->setContent('If you were totally free in your lifestyle, which kind of freelancer would you be ?');
            $this->addReference('question_8', $question);
            $manager->persist($question);

            $question = new Question();
            $question->setContent('What do you see first ?');
            $this->addReference('question_9', $question);
            $manager->persist($question);

            $question = new Question();
            $question->setContent('Your freelance preferences ?');
            $this->addReference('question_10', $question);
            $manager->persist($question);

            $manager->flush();

    }
}
