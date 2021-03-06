<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, inversedBy="products")
     */
    private $productTag;

    public function __construct()
    {
        $this->productTag = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Tag>
     */
    public function getProductTag(): Collection
    {
        return $this->productTag;
    }

    public function addProductTag(Tag $productTag): self
    {
        if (!$this->productTag->contains($productTag)) {
            $this->productTag[] = $productTag;
        }

        return $this;
    }

    public function removeProductTag(Tag $productTag): self
    {
        $this->productTag->removeElement($productTag);

        return $this;
    }

    public function __toString()
    {
        return $this->name ? $this->name:'';
    }
}
