<?php

namespace App\Controller;

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
    public function quizz()
    {
        return $this->render('quizz/quizz.html.twig');
    }

    /**
     * @Route("/quizz/results", name="quizz_results")
     */
    public function results()
    {
        return $this->render('quizz/results.html.twig');
    }
}
