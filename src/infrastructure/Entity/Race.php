<?php

namespace App\infrastructure\Entity;

use App\infrastructure\repository\DoctrineRaceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

#[ORM\Entity(repositoryClass: DoctrineRaceRepository::class)]
class Race
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', unique: true)]
    private ?string $id;

    #[ORM\ManyToOne(targetEntity: Circuit::class)]
    private $circuit;

    #[ORM\Column(type: 'datetime')]
    private $date;

    /**
     * @var Collection<int, Session>
     */
    #[ORM\OneToMany(targetEntity: Session::class, mappedBy: 'race', orphanRemoval: true)]
    private Collection $sessions;

    // Getters and setters

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCircuit(): ?Circuit
    {
        return $this->circuit;
    }

    public function setCircuit(?Circuit $circuit): self
    {
        $this->circuit = $circuit;
        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function __construct()
    {
        $this->id = Uuid::uuid4();
        $this->sessions = new ArrayCollection();
    }

    /**
     * @return Collection<int, Session>
     */
    public function getSessions(): Collection
    {
        return $this->sessions;
    }

    public function addSession(Session $session): static
    {
        if (!$this->sessions->contains($session)) {
            $this->sessions->add($session);
            $session->setRace($this);
        }

        return $this;
    }

    public function removeSession(Session $session): static
    {
        if ($this->sessions->removeElement($session)) {
            // set the owning side to null (unless already changed)
            if ($session->getRace() === $this) {
                $session->setRace(null);
            }
        }

        return $this;
    }
}
