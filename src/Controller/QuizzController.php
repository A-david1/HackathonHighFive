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
     * @Route("/quizz/results", name="quizz_results")
     */
    public function results()
    {
        return $this->render('quizz/results.html.twig');
    }

    /**
     * @Route("/quizz/choice/{id}/", name="quizz_choice")
     */
    public function searchCompatibility(Choice $choice, Request $request): Response
    {
        $data = $request->getUri();
        dd($choice);
        // Search Compatibility with Rubix
        return $this->json([
            "data" => $data,
        ]);
    }
}
