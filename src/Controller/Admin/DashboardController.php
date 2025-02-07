<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Controller\Admin\UserCrudController;
use App\Controller\Admin\TournamentsCrudController;
use App\Controller\Admin\TeamsCrudController;
use App\Controller\Admin\ResultsCrudController;
use App\Controller\Admin\MatchesCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\User;
use App\Entity\Tournaments;
use App\Entity\Teams;
use App\Entity\Matches;


class DashboardController extends AbstractDashboardController
{
    private AdminUrlGenerator $adminUrlGenerator;
    private Security $security;

    public function __construct(AdminUrlGenerator $adminUrlGenerator, Security $security)
    {
        $this->adminUrlGenerator = $adminUrlGenerator;
        $this->security = $security;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Vérifie si l'utilisateur est admin
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_home');
        }

        $url = $this->adminUrlGenerator->setController(UserCrudController::class)->generateUrl();
        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Panel Admin - Tournoi');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home'),
            MenuItem::section('Gestion du site'),
            MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class),
            MenuItem::linkToCrud('Tournois', 'fas fa-trophy', Tournaments::class)->setController(TournamentsCrudController::class),
            MenuItem::linkToCrud('Équipes', 'fas fa-users-cog', Teams::class)->setController(TeamsCrudController::class),
            MenuItem::linkToCrud('Matchs', 'fas fa-futbol', Matches::class)->setController(MatchesCrudController::class),
            MenuItem::section('Autres'),
            MenuItem::linkToRoute('Retour au site', 'fas fa-arrow-left', 'main'),
            MenuItem::linkToLogout('Déconnexion', 'fas fa-sign-out-alt'),
        ];
    }
    
}
