<?php


namespace App\DataFixtures;


use App\Entity\User;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($i = 1; $i < 100; $i++){
            $user = new User();
            $user->setAvatar($faker->image());
            $user->setPseudo($faker->name);
            $user->setJob($faker->jobTitle);
            $user->setCountry($faker->country);
            $user->setRating(rand(1, 5));
            $user->setDescription($faker->sentence);
            $user->setHasAnswered(true);
            $this->addReference('user_' . $i, $user);
            $manager->persist($user);
        }
        $manager->flush();
    }
}
