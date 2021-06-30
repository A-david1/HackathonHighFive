<?php

namespace App\Controller;


use App\Entity\Answer;
use App\Entity\Choice;
use App\Form\ChoiceType;
use App\Service\stat;
use Doctrine\ORM\EntityManager;
use App\Entity\User;
use App\Repository\AnswerRepository;
use App\Repository\ChoiceRepository;
use App\Repository\QuestionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

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
    public function quizz(QuestionRepository $questionRepository, ChoiceRepository $choiceRepository, AnswerRepository $answerRepository, stat $stat)
    {

        $questions = $questionRepository->findAll();
        $choices = $choiceRepository->findAll();
        $answers = $answerRepository->findAll();

        $totalStatAnswer = $stat->statAnswer();

        return $this->render('quizz/quizz.html.twig', [
            'questions' => $questions,
            'choices' => $choices,
            'answers' => $answers,
            'totalStatAnswer' => $totalStatAnswer,
        ]);
    }

    /**
     * @Route("/quizz/results", name="quizz_results")
     */
    public function results(UserRepository $userRepository, AnswerRepository $answerRepository)
    {
        $allAnswer = $answerRepository->findAll();
        $answerUser = $answerRepository->findBy(['user' => 5]);
        $tauxCompatibility = [95, 85, 75];

        return $this->render('quizz/quizz.html.twig', [
            'tauxCompatibility' => $tauxCompatibility,
        ]);
    }
}
