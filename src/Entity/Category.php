<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $Label;

    public function getId(): ?int{
        return $this->id;
    }

    public function getLabel(): ?string{
        return $this->Label;
    }

    public function setLabel(string $Label): self{
        $this->Label = $Label;
        return $this;
    }
    
    // public function __construct($Label ="Produit de la ferme"){
    //     $this->Label=$Label;
    // }
}
