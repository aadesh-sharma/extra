<?php

namespace App\Entity;
use App\Entity\User;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

     /**
     * @ORM\Column(type="string", columnDefinition="ENUM('draft', 'pending', 'active', 'inactive', 'trashed')")
     */
    private $post_status;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $created;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $updated;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="posts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $post_author;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(\DateTimeInterface $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getPostAuthor(): ?user
    {
        return $this->post_author;
    }

    public function setPostAuthor(?user $post_author): self
    {
        $this->post_author = $post_author;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getPostStatus(): ?string
    {
        return $this->post_status;
    }

    public function setPostStatus(string $post_status): self
    {
        $this->post_status = $post_status;

        return $this;
    }
}
