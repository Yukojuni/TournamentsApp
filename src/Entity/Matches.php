<?php

namespace App\Entity;

use App\Repository\MatchesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatchesRepository::class)]
class Matches
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?teams $team1 = null;

    #[ORM\ManyToOne]
    private ?teams $team2 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tournaments $tournament = null;

    #[ORM\Column(nullable: true)]
    private ?int $score1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $score2 = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $match_date = null;

    #[ORM\ManyToOne]
    private ?teams $winner = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTeam1(): ?teams
    {
        return $this->team1;
    }

    public function setTeam1(?teams $team1): static
    {
        $this->team1 = $team1;

        return $this;
    }

    public function getTeam2(): ?teams
    {
        return $this->team2;
    }

    public function setTeam2(?teams $team2): static
    {
        $this->team2 = $team2;

        return $this;
    }

    public function getTournament(): ?Tournaments
    {
        return $this->tournament;
    }

    public function setTournament(?Tournaments $tournament): static
    {
        $this->tournament = $tournament;

        return $this;
    }

    public function getScore1(): ?int
    {
        return $this->score1;
    }

    public function setScore1(?int $score1): static
    {
        $this->score1 = $score1;

        return $this;
    }

    public function getScore2(): ?int
    {
        return $this->score2;
    }

    public function setScore2(?int $score2): static
    {
        $this->score2 = $score2;

        return $this;
    }

    public function getMatchDate(): ?\DateTimeInterface
    {
        return $this->match_date;
    }

    public function setMatchDate(\DateTimeInterface $match_date): static
    {
        $this->match_date = $match_date;

        return $this;
    }

    public function getWinner(): ?teams
    {
        return $this->winner;
    }

    public function setWinner(?teams $winner): static
    {
        $this->winner = $winner;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }
}
