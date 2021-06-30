<?php

namespace App\Controller;


use App\Entity\Answer;
use App\Entity\Choice;
use App\Entity\Question;
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
use Symfony\Component\HttpFoundation\Session\Session;
use App\Service\mlProcessor;

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
    }

    /**
     * @Route("/quizz/choice/{id}/", name="quizz_choice")
     */

    public function searchCompatibility(Request $request, mlProcessor $mlProcessor): Response
    {
        $entityBody = file_get_contents('php://input');
        $session = $request->getSession();
        $rubix_array = $session->get('rubix');
        $turn = $session->get('turn');
        $nbpeople = count($rubix_array);


        for ($i=0; $i< $nbpeople; $i++) {
            $turn = $session->get('turn');
            $rubix_array[$i][$turn] = $entityBody;
        }
        $session->set('rubix',$rubix_array);
        $turn = $turn +1;
        $session->set('turn', $turn);

        $probabilities = $mlProcessor->mlpreprocessing($rubix_array);

        // Search Compatibility with Rubix
        return $this->json([
            "data" => $probabilities,

        ]);
    }


    /**
     * @Route("/dd", name="session_destroy")
     */
    public function sessionDestroy()
    {
        session_destroy();
        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/session", name="session")
     */
    public function checkSession(Request $request)
    {
        $session = $request->getSession();
     dd($session->get('rubix'));
    }
}
