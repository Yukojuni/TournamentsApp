<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\TournamentsRepository;
use App\Entity\Tournaments;

final class TournamentDetailController extends AbstractController
{
    #[Route('/tournoi/{id}', name: 'app_tournament_details', requirements: ['id' => '\d+'])]
    public function tournamentDetails(TournamentsRepository $tournamentsRepository, int $id): Response
    {
        $tournament = $tournamentsRepository->find($id);

        if (!$tournament) {
            throw $this->createNotFoundException("Le tournoi demandé n'existe pas.");
        }

        return $this->render('tournament_detail/index.html.twig', [
            'tournament' => $tournament,
        ]);
    }
}
