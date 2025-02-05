<?php

namespace App\Entity;

use App\Repository\ResultsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResultsRepository::class)]
class Results
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?matches $matchs = null;

    #[ORM\Column]
    private ?int $team1_score = null;

    #[ORM\Column]
    private ?int $team2_score = null;

    #[ORM\ManyToOne]
    private ?teams $winner = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatchs(): ?matches
    {
        return $this->matchs;
    }

    public function setMatchs(?matches $matchs): static
    {
        $this->matchs = $matchs;

        return $this;
    }

    public function getTeam1Score(): ?int
    {
        return $this->team1_score;
    }

    public function setTeam1Score(int $team1_score): static
    {
        $this->team1_score = $team1_score;

        return $this;
    }

    public function getTeam2Score(): ?int
    {
        return $this->team2_score;
    }

    public function setTeam2Score(int $team2_score): static
    {
        $this->team2_score = $team2_score;

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
