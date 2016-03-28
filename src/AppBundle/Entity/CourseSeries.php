<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course_series")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CourseSeriesRepository")
 */
class CourseSeries
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var Semester
     *
     * @ORM\ManyToOne(targetEntity="Semester")
     * @ORM\JoinColumn(name="semester_id", referencedColumnName="id")
     */
    private $semester;

    /**
     * @var CourseType
     *
     * @ORM\ManyToOne(targetEntity="CourseType")
     * @ORM\JoinColumn(name="course_type_id", referencedColumnName="id")
     */
    private $courseType;

    /**
     * @var int
     *
     * @ORM\Column(name="participant_limit", type="integer")
     */
    private $participantLimit;

    /**
     * @var User[]
     *
     * @ORM\ManyToMany(targetEntity="User")
     * @ORM\JoinTable(name="tutor",
     *    joinColumns={@ORM\JoinColumn(name="course_series_id", referencedColumnName="id")},
     *    inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     *    )
     */
    private $tutors;

    /**
     * @var Participant[]
     *
     * @ORM\OneToMany(targetEntity="Participant", mappedBy="CourseSeries")
     */
    private $participants;

    /**
     * @var CourseClass[]
     *
     * @ORM\OneToMany(targetEntity="CourseClass", mappedBy="CourseSeries")
     */
    private $classes;


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
     * Set name
     *
     * @param string $name
     *
     * @return Course
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Course
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return Semester
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * @param Semester $semester
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    /**
     * @return CourseType
     */
    public function getCourseType()
    {
        return $this->courseType;
    }

    /**
     * @param CourseType $courseType
     */
    public function setCourseType($courseType)
    {
        $this->courseType = $courseType;
    }

    /**
     * @return int
     */
    public function getParticipantLimit()
    {
        return $this->participantLimit;
    }

    /**
     * @param int $participantLimit
     */
    public function setParticipantLimit($participantLimit)
    {
        $this->participantLimit = $participantLimit;
    }

    /**
     * @return User[]
     */
    public function getTutors()
    {
        return $this->tutors;
    }

    /**
     * @param User[] $tutors
     */
    public function setTutors($tutors)
    {
        $this->tutors = $tutors;
    }

    /**
     * @return Participant[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param Participant[] $participants
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    }

    /**
     * @return CourseClass[]
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param CourseClass[] $classes
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;
    }



}

