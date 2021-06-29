<?php

namespace App\Controller;

use App\Entity\Choice;
use App\Form\ChoiceType;
use Doctrine\ORM\EntityManager;
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
    public function question(EntityManagerInterface $entityManager, Request $request): Response
    {

        $choice = new Choice();
        $form = $this->createForm(ChoiceType::class, $choice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($choice);
            $entityManager->flush();
        }

        return $this->render('quizz/quizz.html.twig',[
            "form" => $form->createView(),
        ]);
    }

    /**
     * @Route("/quizz/results", name="quizz_results")
     */
    public function results()
    {
        return $this->render('quizz/results.html.twig');
    }
}
