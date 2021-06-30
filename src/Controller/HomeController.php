<?php

namespace App\Controller;

use App\Service\mlProcessor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(mlProcessor $mlProcessor,
                          Request $request): Response
    {
        $testData = $mlProcessor->createDATA();
        $session = $request->getSession();
        $session->set('rubix', $testData);
        $session->set('turn', 0);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
