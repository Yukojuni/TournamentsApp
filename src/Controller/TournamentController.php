<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\TournamentsRepository;

final class TournamentController extends AbstractController
{
    #[Route('/tournois', name: 'app_tournaments')]
    public function tournaments(Request $request, TournamentsRepository $tournamentsRepository): Response
    {
        $tournaments = $tournamentsRepository->findAll();
        $filterStatus = $request->query->get('status');
        
        if ($filterStatus) {
            $tournaments = array_filter($tournaments, function($tournament) use ($filterStatus) {
                return $tournament->getStatus() == $filterStatus;
            });
        }
        return $this->render('tournament/index.html.twig', [
            'tournaments' => $tournaments,
            'filterStatus' => $filterStatus,
        ]);
    }
}
