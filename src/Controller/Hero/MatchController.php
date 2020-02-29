<?php

namespace App\Controller\Hero;

use App\Services\OpenDotaService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class MatchController extends AbstractController
{
    private $openDotaService;

    public function __construct(
        OpenDotaService $openDotaService
    ) {
        $this->openDotaService = $openDotaService;
    }

    /**
     * @Route("/heroes/{id}/matches")
     */
    public function index($id)
    {
        $matches = $this->openDotaService->heroMatches($id);

        return $this->render('hero\match\list.html.twig', [
            'list' => $matches,
        ]);
    }

    /**
     * @Route("/matches/{id}")
     */
    public function show($id)
    {
        $match = $this->openDotaService->match($id);

        return $this->render('hero\match\item.html.twig', [
            'match' => $match,
        ]);
    }
}