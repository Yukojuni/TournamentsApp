<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\TournamentsRepository;


final class TournamentController extends AbstractController
{
    // #[Route('/', name: 'app_home')]
    // public function home(): Response
    // {
    //     return $this->render('user/home.html.twig');
    // }

    #[Route('/tournois', name: 'app_tournaments')]
    public function tournaments(TournamentsRepository $tournamentsRepository): Response
    {
        $tournaments = $tournamentsRepository->findAll();
        return $this->render('tournament/index.html.twig', [
            'tournaments' => $tournaments,
        ]);
    }

    // #[Route('/tournoi/{id}', name: 'app_tournament_detail')]
    // public function tournamentDetail(Tournaments $tournament): Response
    // {
    //     return $this->render('user/tournament_detail.html.twig', [
    //         'tournament' => $tournament,
    //     ]);
    // }

    // #[Route('/equipes', name: 'app_teams')]
    // #[IsGranted('ROLE_USER')]
    // public function teams(TeamRepository $teamRepository): Response
    // {
    //     $user = $this->getUser();
    //     $teams = $teamRepository->findBy(['owner' => $user]);
    //     return $this->render('user/teams.html.twig', [
    //         'teams' => $teams,
    //     ]);
    // }

    // #[Route('/profil', name: 'app_profile')]
    // #[IsGranted('ROLE_USER')]
    // public function profile(): Response
    // {
    //     return $this->render('user/profile.html.twig', [
    //         'user' => $this->getUser(),
    //     ]);
    // }
}
