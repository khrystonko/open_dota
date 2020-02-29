<?php

namespace App\Controller;

use App\Services\OpenDotaService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class HeroController extends AbstractController
{
    private $openDotaService;

    public function __construct(
        OpenDotaService $openDotaService
    ) {
        $this->openDotaService = $openDotaService;
    }

    /**
     * @Route("/heroes")
     */
    public function index()
    {
        $heroes = $this->openDotaService->heroes();

        return $this->render('hero\list.html.twig', [
            'heroes' => $heroes,
        ]);
    }
}