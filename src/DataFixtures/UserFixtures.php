<?php


namespace App\DataFixtures;


use App\Entity\User;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public const RATING = [
        1,
        2,
        3,
        4,
        5,
    ];

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($i = 1; $i < 100; $i++){
            $user = new User();
            $user->setAvatar($faker->image());
            $user->setPseudo($faker->name);
            $user->setJob($faker->jobTitle);
            $user->setCountry($faker->country);
            $user->setRating(rand(self::RATING));
            $user->setDescription($faker->sentence);
            $user->setResultMatching();
            $user->setAnswer();

            $manager->persist($user);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            AnswerFixtures::class,
            ResultMatchingFixtures::class,
        ];
    }
}
