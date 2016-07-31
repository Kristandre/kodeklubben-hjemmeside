<?php

namespace StaticContentBundle\Entity;

use CodeClubBundle\Entity\Club;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Class
 *
 * @ORM\Table(name="static_content", uniqueConstraints={
 *      @ORM\UniqueConstraint(name="static_content_string_idx", columns={"id_string"})
 * })
 * @UniqueEntity("idString")
 * 
 * @ORM\Entity(repositoryClass="StaticContentBundle\Repository\StaticContentRepository")
 */
class StaticContent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Club
     * 
     * @ORM\ManyToOne(targetEntity="\CodeClubBundle\Entity\Club")
     */
    private $club;


    /**
     * @var string
     *
     * @ORM\Column(name="id_string", type="string", unique=true)
     */
    private $idString;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_edited", type="datetime")
     */
    private $lastEdited;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="last_edited_by_user_id", referencedColumnName="id")
     */
    private $lastEditedBy;

    /**
     * StaticContent constructor.
     */
    public function __construct()
    {
        $this->lastEdited = new \DateTime();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Club
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * @param Club $club
     */
    public function setClub($club)
    {
        $this->club = $club;
    }

    /**
     * @return string
     */
    public function getIdString()
    {
        return $this->idString;
    }

    /**
     * @param string $idString
     */
    public function setIdString($idString)
    {
        $this->idString = $idString;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return \DateTime
     */
    public function getLastEdited()
    {
        return $this->lastEdited;
    }

    /**
     * @param \DateTime $lastEdited
     */
    public function setLastEdited($lastEdited)
    {
        $this->lastEdited = $lastEdited;
    }

    /**
     * @return \UserBundle\Entity\User
     */
    public function getLastEditedBy()
    {
        return $this->lastEditedBy;
    }

    /**
     * @param \UserBundle\Entity\User $lastEditedBy
     */
    public function setLastEditedBy($lastEditedBy)
    {
        $this->lastEditedBy = $lastEditedBy;
    }
}
