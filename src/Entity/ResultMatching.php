<?php

namespace App\Entity;

use App\Repository\ResultMatchingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResultMatchingRepository::class)
 */
class ResultMatching
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $isMatch;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="resultMatching")
     */
    private $mentor;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="resultMatching")
     */
    private $apprentice;

    public function __construct()
    {
        $this->mentor = new ArrayCollection();
        $this->apprentice = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsMatch(): ?bool
    {
        return $this->isMatch;
    }

    public function setIsMatch(bool $isMatch): self
    {
        $this->isMatch = $isMatch;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getMentor(): Collection
    {
        return $this->mentor;
    }

    public function addMentor(User $mentor): self
    {
        if (!$this->mentor->contains($mentor)) {
            $this->mentor[] = $mentor;
            $mentor->setResultMatching($this);
        }

        return $this;
    }

    public function removeMentor(User $mentor): self
    {
        if ($this->mentor->removeElement($mentor)) {
            // set the owning side to null (unless already changed)
            if ($mentor->getResultMatching() === $this) {
                $mentor->setResultMatching(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getApprentice(): Collection
    {
        return $this->apprentice;
    }

    public function addApprentice(User $apprentice): self
    {
        if (!$this->apprentice->contains($apprentice)) {
            $this->apprentice[] = $apprentice;
            $apprentice->setResultMatching($this);
        }

        return $this;
    }

    public function removeApprentice(User $apprentice): self
    {
        if ($this->apprentice->removeElement($apprentice)) {
            // set the owning side to null (unless already changed)
            if ($apprentice->getResultMatching() === $this) {
                $apprentice->setResultMatching(null);
            }
        }

        return $this;
    }
}
