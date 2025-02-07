<?php

namespace App\Controller;

use App\Entity\Teams;
use App\Entity\Tournaments;
use App\Repository\TournamentsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

final class TeamController extends AbstractController
{
    #[Route('/team', name: 'app_team', methods: ['GET', 'POST'])]
    public function index(Request $request, TournamentsRepository $tournamentRepository, EntityManagerInterface $em): Response
    {}
}
