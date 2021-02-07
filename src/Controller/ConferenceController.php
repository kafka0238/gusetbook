<?php

namespace App\Controller;

use App\Repository\ConferenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @param Environment $twig
     * @param ConferenceRepository $conferenceRepository
     * @return Response
     */
    public function index(Environment $twig, ConferenceRepository $conferenceRepository): Response
    {
        return new Response($twig->render('conference/index.html', [
            'conferences' => $conferenceRepository->findAll(),
        ]));
    }
}
