<?php

namespace App\Entity;

use App\Repository\ChoiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChoiceRepository::class)
 */
class Choice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $choice1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $choice2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $choice3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $choice4;

    /**
     * @ORM\ManyToOne(targetEntity=Question::class, inversedBy="choice")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChoice1(): ?string
    {
        return $this->choice1;
    }

    public function setChoice1(?string $choice1): self
    {
        $this->choice1 = $choice1;

        return $this;
    }

    public function getChoice2(): ?string
    {
        return $this->choice2;
    }

    public function setChoice2(?string $choice2): self
    {
        $this->choice2 = $choice2;

        return $this;
    }

    public function getChoice3(): ?string
    {
        return $this->choice3;
    }

    public function setChoice3(?string $choice3): self
    {
        $this->choice3 = $choice3;

        return $this;
    }

    public function getChoice4(): ?string
    {
        return $this->choice4;
    }

    public function setChoice4(?string $choice4): self
    {
        $this->choice4 = $choice4;

        return $this;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): self
    {
        $this->question = $question;

        return $this;
    }
}
