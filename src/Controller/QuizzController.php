<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\AnswerRepository;
use App\Repository\ChoiceRepository;
use App\Repository\QuestionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizzController extends AbstractController
{
    /**
     * @Route("/quizz", name="quizz_information")
     */
    public function initQuizz(): Response
    {
        return $this->render('quizz/information.html.twig');
    }

    /**
     * @Route("/quizz/question", name="quizz")
     */
    public function quizz(QuestionRepository $questionRepository, ChoiceRepository $choiceRepository, UserRepository $userRepository)
    {

        $questions = $questionRepository->findAll();
        $choices = $choiceRepository->findAll();

        $user = $userRepository->findOneBy(['id' => 100]);

        return $this->render('quizz/quizz.html.twig', [
            'questions' => $questions,
            'choices' => $choices,
            'user' => $user,
        ]);
    }


//    /**
//     * @Route("/quizz/{user}", name="user_hasAnswered")
//     */
//    public function hasAnswered(EntityManagerInterface $entityManager, User $user): Response
//    {
//        $user->setHasAnswered(!$user->getHasAnswered());
//        $entityManager->persist($user);
//        $entityManager->flush();
//
//        return $this->redirectToRoute('quizz');
//    }

    /**
     * @Route("/quizz/results", name="quizz_results")
     */
    public function results()
    {
        return $this->render('quizz/results.html.twig');
    }
}
