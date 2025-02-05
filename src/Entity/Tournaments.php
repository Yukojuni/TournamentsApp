<?php

namespace App\Entity;

use App\Repository\TournamentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TournamentsRepository::class)]
class Tournaments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $start_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $registration_start_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $registration_end_date = null;

    #[ORM\Column(nullable: true)]
    private ?int $max_teams = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $status = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): static
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getRegistrationStartDate(): ?\DateTimeInterface
    {
        return $this->registration_start_date;
    }

    public function setRegistrationStartDate(\DateTimeInterface $registration_start_date): static
    {
        $this->registration_start_date = $registration_start_date;

        return $this;
    }

    public function getRegistrationEndDate(): ?\DateTimeInterface
    {
        return $this->registration_end_date;
    }

    public function setRegistrationEndDate(\DateTimeInterface $registration_end_date): static
    {
        $this->registration_end_date = $registration_end_date;

        return $this;
    }

    public function getMaxTeams(): ?int
    {
        return $this->max_teams;
    }

    public function setMaxTeams(?int $max_teams): static
    {
        $this->max_teams = $max_teams;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

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
