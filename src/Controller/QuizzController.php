<?php

namespace App\Controller;


use App\Entity\Answer;
use App\Entity\Choice;
use App\Form\ChoiceType;
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
    public function quizz(QuestionRepository $questionRepository, ChoiceRepository $choiceRepository)
    {

        $questions = $questionRepository->findAll();
        $choices = $choiceRepository->findAll();

        return $this->render('quizz/quizz.html.twig', [
            'questions' => $questions,
            'choices' => $choices,
        ]);
    }

    /**
     * @Route("/quizz/answer/stat", name="quizz_answer_stat")
     */
    public function statAnswer(AnswerRepository $answerRepository)
    {
        $statQuestion1Choice1 = count($answerRepository->findBy(['question' => 1, 'answer' => 0]));
        $statQuestion1Choice2 = count($answerRepository->findBy(['question' => 1, 'answer' => 1]));
        $statQuestion1Choice3 = count($answerRepository->findBy(['question' => 1, 'answer' => 2]));
        $statQuestion1Choice4 = count($answerRepository->findBy(['question' => 1, 'answer' => 3]));
        $globalStatQuestion1 = [$statQuestion1Choice1, $statQuestion1Choice2, $statQuestion1Choice3, $statQuestion1Choice4];
        $totalAnswerQuestion1 = array_sum($globalStatQuestion1);
        $tauxQuestion1Choice1 = (intval(($statQuestion1Choice1/$totalAnswerQuestion1) * 100) . "%");
        $tauxQuestion1Choice2 = (intval(($statQuestion1Choice2/$totalAnswerQuestion1) * 100) . "%");
        $tauxQuestion1Choice3 = (intval(($statQuestion1Choice3/$totalAnswerQuestion1) * 100) . "%");
        $tauxQuestion1Choice4 = (intval(($statQuestion1Choice4/$totalAnswerQuestion1) * 100) . "%");

        $statQuestion2Choice1 = count($answerRepository->findBy(['question' => 2, 'answer' => 0]));
        $statQuestion2Choice2 = count($answerRepository->findBy(['question' => 2, 'answer' => 1]));
        $statQuestion2Choice3 = count($answerRepository->findBy(['question' => 2, 'answer' => 2]));
        $statQuestion2Choice4 = count($answerRepository->findBy(['question' => 2, 'answer' => 3]));
        $globalStatQuestion2 = [$statQuestion2Choice1, $statQuestion2Choice2, $statQuestion2Choice3, $statQuestion2Choice4];
        $totalAnswerQuestion2 = array_sum($globalStatQuestion2);
        $tauxQuestion2Choice1 = (intval(($statQuestion2Choice1/$totalAnswerQuestion2) * 100) . "%");
        $tauxQuestion2Choice2 = (intval(($statQuestion2Choice2/$totalAnswerQuestion2) * 100) . "%");
        $tauxQuestion2Choice3 = (intval(($statQuestion2Choice3/$totalAnswerQuestion2) * 100) . "%");
        $tauxQuestion2Choice4 = (intval(($statQuestion2Choice4/$totalAnswerQuestion2) * 100) . "%");

        $statQuestion3Choice1 = count($answerRepository->findBy(['question' => 3, 'answer' => 0]));
        $statQuestion3Choice2 = count($answerRepository->findBy(['question' => 3, 'answer' => 1]));
        $statQuestion3Choice3 = count($answerRepository->findBy(['question' => 3, 'answer' => 2]));
        $statQuestion3Choice4 = count($answerRepository->findBy(['question' => 3, 'answer' => 3]));
        $globalStatQuestion3 = [$statQuestion3Choice1, $statQuestion3Choice2, $statQuestion3Choice3, $statQuestion3Choice4];
        $totalAnswerQuestion3 = array_sum($globalStatQuestion3);
        $tauxQuestion3Choice1 = (intval(($statQuestion3Choice1/$totalAnswerQuestion3) * 100) . "%");
        $tauxQuestion3Choice2 = (intval(($statQuestion3Choice2/$totalAnswerQuestion3) * 100) . "%");
        $tauxQuestion3Choice3 = (intval(($statQuestion3Choice3/$totalAnswerQuestion3) * 100) . "%");
        $tauxQuestion3Choice4 = (intval(($statQuestion3Choice4/$totalAnswerQuestion3) * 100) . "%");

        $statQuestion4Choice1 = count($answerRepository->findBy(['question' => 4, 'answer' => 0]));
        $statQuestion4Choice2 = count($answerRepository->findBy(['question' => 4, 'answer' => 1]));
        $statQuestion4Choice3 = count($answerRepository->findBy(['question' => 4, 'answer' => 2]));
        $statQuestion4Choice4 = count($answerRepository->findBy(['question' => 4, 'answer' => 3]));
        $globalStatQuestion4 = [$statQuestion4Choice1, $statQuestion4Choice2, $statQuestion4Choice3, $statQuestion4Choice4];
        $totalAnswerQuestion4 = array_sum($globalStatQuestion4);
        $tauxQuestion4Choice1 = (intval(($statQuestion4Choice1/$totalAnswerQuestion4) * 100) . "%");
        $tauxQuestion4Choice2 = (intval(($statQuestion4Choice2/$totalAnswerQuestion4) * 100) . "%");
        $tauxQuestion4Choice3 = (intval(($statQuestion4Choice3/$totalAnswerQuestion4) * 100) . "%");
        $tauxQuestion4Choice4 = (intval(($statQuestion4Choice4/$totalAnswerQuestion4) * 100) . "%");

        $statQuestion5Choice1 = count($answerRepository->findBy(['question' => 5, 'answer' => 0]));
        $statQuestion5Choice2 = count($answerRepository->findBy(['question' => 5, 'answer' => 1]));
        $statQuestion5Choice3 = count($answerRepository->findBy(['question' => 5, 'answer' => 2]));
        $statQuestion5Choice4 = count($answerRepository->findBy(['question' => 5, 'answer' => 3]));
        $globalStatQuestion5 = [$statQuestion5Choice1, $statQuestion5Choice2, $statQuestion5Choice3, $statQuestion5Choice4];
        $totalAnswerQuestion5 = array_sum($globalStatQuestion5);
        $tauxQuestion5Choice1 = (intval(($statQuestion5Choice1/$totalAnswerQuestion5) * 100) . "%");
        $tauxQuestion5Choice2 = (intval(($statQuestion5Choice2/$totalAnswerQuestion5) * 100) . "%");
        $tauxQuestion5Choice3 = (intval(($statQuestion5Choice3/$totalAnswerQuestion5) * 100) . "%");
        $tauxQuestion5Choice4 = (intval(($statQuestion5Choice4/$totalAnswerQuestion5) * 100) . "%");

        $statQuestion6Choice1 = count($answerRepository->findBy(['question' => 6, 'answer' => 0]));
        $statQuestion6Choice2 = count($answerRepository->findBy(['question' => 6, 'answer' => 1]));
        $statQuestion6Choice3 = count($answerRepository->findBy(['question' => 6, 'answer' => 2]));
        $statQuestion6Choice4 = count($answerRepository->findBy(['question' => 6, 'answer' => 3]));
        $globalStatQuestion6 = [$statQuestion6Choice1, $statQuestion6Choice2, $statQuestion6Choice3, $statQuestion6Choice4];
        $totalAnswerQuestion6 = array_sum($globalStatQuestion6);
        $tauxQuestion6Choice1 = (intval(($statQuestion6Choice1/$totalAnswerQuestion6) * 100) . "%");
        $tauxQuestion6Choice2 = (intval(($statQuestion6Choice2/$totalAnswerQuestion6) * 100) . "%");
        $tauxQuestion6Choice3 = (intval(($statQuestion6Choice3/$totalAnswerQuestion6) * 100) . "%");
        $tauxQuestion6Choice4 = (intval(($statQuestion6Choice4/$totalAnswerQuestion6) * 100) . "%");

        $statQuestion7Choice1 = count($answerRepository->findBy(['question' => 7, 'answer' => 0]));
        $statQuestion7Choice2 = count($answerRepository->findBy(['question' => 7, 'answer' => 1]));
        $statQuestion7Choice3 = count($answerRepository->findBy(['question' => 7, 'answer' => 2]));
        $statQuestion7Choice4 = count($answerRepository->findBy(['question' => 7, 'answer' => 3]));
        $globalStatQuestion7 = [$statQuestion7Choice1, $statQuestion7Choice2, $statQuestion7Choice3, $statQuestion7Choice4];
        $totalAnswerQuestion7 = array_sum($globalStatQuestion7);
        $tauxQuestion7Choice1 = (intval(($statQuestion7Choice1/$totalAnswerQuestion7) * 100) . "%");
        $tauxQuestion7Choice2 = (intval(($statQuestion7Choice2/$totalAnswerQuestion7) * 100) . "%");
        $tauxQuestion7Choice3 = (intval(($statQuestion7Choice3/$totalAnswerQuestion7) * 100) . "%");
        $tauxQuestion7Choice4 = (intval(($statQuestion7Choice4/$totalAnswerQuestion7) * 100) . "%");

        $statQuestion8Choice1 = count($answerRepository->findBy(['question' => 8, 'answer' => 0]));
        $statQuestion8Choice2 = count($answerRepository->findBy(['question' => 8, 'answer' => 1]));
        $statQuestion8Choice3 = count($answerRepository->findBy(['question' => 8, 'answer' => 2]));
        $statQuestion8Choice4 = count($answerRepository->findBy(['question' => 8, 'answer' => 3]));
        $globalStatQuestion8 = [$statQuestion8Choice1, $statQuestion8Choice2, $statQuestion8Choice3, $statQuestion8Choice4];
        $totalAnswerQuestion8 = array_sum($globalStatQuestion8);
        $tauxQuestion8Choice1 = (intval(($statQuestion8Choice1/$totalAnswerQuestion8) * 100) . "%");
        $tauxQuestion8Choice2 = (intval(($statQuestion8Choice2/$totalAnswerQuestion8) * 100) . "%");
        $tauxQuestion8Choice3 = (intval(($statQuestion8Choice3/$totalAnswerQuestion8) * 100) . "%");
        $tauxQuestion8Choice4 = (intval(($statQuestion8Choice4/$totalAnswerQuestion8) * 100) . "%");

        $statQuestion9Choice1 = count($answerRepository->findBy(['question' => 9, 'answer' => 0]));
        $statQuestion9Choice2 = count($answerRepository->findBy(['question' => 9, 'answer' => 1]));
        $statQuestion9Choice3 = count($answerRepository->findBy(['question' => 9, 'answer' => 2]));
        $statQuestion9Choice4 = count($answerRepository->findBy(['question' => 9, 'answer' => 3]));
        $globalStatQuestion9 = [$statQuestion9Choice1, $statQuestion9Choice2, $statQuestion9Choice3, $statQuestion9Choice4];
        $totalAnswerQuestion9 = array_sum($globalStatQuestion9);
        $tauxQuestion9Choice1 = (intval(($statQuestion9Choice1/$totalAnswerQuestion9) * 100) . "%");
        $tauxQuestion9Choice2 = (intval(($statQuestion9Choice2/$totalAnswerQuestion9) * 100) . "%");
        $tauxQuestion9Choice3 = (intval(($statQuestion9Choice3/$totalAnswerQuestion9) * 100) . "%");
        $tauxQuestion9Choice4 = (intval(($statQuestion9Choice4/$totalAnswerQuestion9) * 100) . "%");

        $statQuestion10Choice1 = count($answerRepository->findBy(['question' => 10, 'answer' => 0]));
        $statQuestion10Choice2 = count($answerRepository->findBy(['question' => 10, 'answer' => 1]));
        $statQuestion10Choice3 = count($answerRepository->findBy(['question' => 10, 'answer' => 2]));
        $statQuestion10Choice4 = count($answerRepository->findBy(['question' => 10, 'answer' => 3]));
        $globalStatQuestion10 = [$statQuestion10Choice1, $statQuestion10Choice2, $statQuestion10Choice3, $statQuestion10Choice4];
        $totalAnswerQuestion10 = array_sum($globalStatQuestion10);
        $tauxQuestion10Choice1 = (intval(($statQuestion10Choice1/$totalAnswerQuestion10) * 100) . "%");
        $tauxQuestion10Choice2 = (intval(($statQuestion10Choice2/$totalAnswerQuestion10) * 100) . "%");
        $tauxQuestion10Choice3 = (intval(($statQuestion10Choice3/$totalAnswerQuestion10) * 100) . "%");
        $tauxQuestion10Choice4 = (intval(($statQuestion10Choice4/$totalAnswerQuestion10) * 100) . "%");

        $totalAnswer = [
            $totalAnswerQuestion1,
            $totalAnswerQuestion2,
            $totalAnswerQuestion3,
            $totalAnswerQuestion4,
            $totalAnswerQuestion5,
            $totalAnswerQuestion6,
            $totalAnswerQuestion7,
            $totalAnswerQuestion8,
            $totalAnswerQuestion9,
            $totalAnswerQuestion10,
        ];

        $totalStatAnswer = [
            'question 1' => [
                $tauxQuestion1Choice1,
                $tauxQuestion1Choice2,
                $tauxQuestion1Choice3,
                $tauxQuestion1Choice4,
            ],
            'question 2' => [
                $tauxQuestion2Choice1,
                $tauxQuestion2Choice2,
                $tauxQuestion2Choice3,
                $tauxQuestion2Choice4,
            ],
            'question 3' => [
                $tauxQuestion3Choice1,
                $tauxQuestion3Choice2,
                $tauxQuestion3Choice3,
                $tauxQuestion3Choice4,
            ],
            'question 4' => [
                $tauxQuestion4Choice1,
                $tauxQuestion4Choice2,
                $tauxQuestion4Choice3,
                $tauxQuestion4Choice4,
            ],
            'question 5' => [
                $tauxQuestion5Choice1,
                $tauxQuestion5Choice2,
                $tauxQuestion5Choice3,
                $tauxQuestion5Choice4,
            ],
            'question 6' => [
                $tauxQuestion6Choice1,
                $tauxQuestion6Choice2,
                $tauxQuestion6Choice3,
                $tauxQuestion6Choice4,
            ],
            'question 7' => [
                $tauxQuestion7Choice1,
                $tauxQuestion7Choice2,
                $tauxQuestion7Choice3,
                $tauxQuestion7Choice4,
            ],
            'question 8' => [
                $tauxQuestion8Choice1,
                $tauxQuestion8Choice2,
                $tauxQuestion8Choice3,
                $tauxQuestion8Choice4,
            ],
            'question 9' => [
                $tauxQuestion9Choice1,
                $tauxQuestion9Choice2,
                $tauxQuestion9Choice3,
                $tauxQuestion9Choice4,
            ],
            'question 10' => [
                $tauxQuestion10Choice1,
                $tauxQuestion10Choice2,
                $tauxQuestion10Choice3,
                $tauxQuestion10Choice4,
            ],
        ];

        return $this->render('quizz/quizz.html.twig', [
            'totalStatAnswer' => $totalStatAnswer,
        ]);
    }

    /**
     * @Route("/quizz/results", name="quizz_results")
     */
    public function results(UserRepository $userRepository, AnswerRepository $answerRepository)
    {
        $user = $userRepository->findOneBy(['id' => 5]);

        $answerUser = $answerRepository->findBy(['user' => 5]);
        $answerUser =


        dd($answerUser);

        return $this->render('quizz/results.html.twig');
    }
}
