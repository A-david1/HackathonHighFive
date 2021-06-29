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
        $hasAnswer = false;

        $question = $questionRepository->findAll();
        $choice = $choiceRepository->findAll();

        $questions = [
            0 => 'canard ou lapin ?',
            1 => 'verre à moitié....',
            2 => 'réseau social ?',
            ];

        $choices = [
            'question1' => ['Canard', 'Lapin'],
            'question2' => ['vide', 'plein'],
            'question3' => ['facebook', 'twiter', 'insta', 'linkedin'],
        ];


        return $this->render('quizz/quizz.html.twig', [
            'question' => $question,
            'choice' => $choice,
            'questions' => $questions,
            'choices' => $choices,
            'hasAnswer' => $hasAnswer,
           // 'user' => $userRepository->findOneBy($this->getUser()),
        ]);
    }


//    /**
//     * @Route("/quizz/user", name="user_hasAnswered")
//     */
//    public function hasAnswered(EntityManagerInterface $entityManager, User $user): Response
//    {
//        $hasAnswer = true;
//
//        $user = $hasAnswer;
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
