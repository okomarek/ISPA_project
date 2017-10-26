<?php
namespace SchoolBundle\Entity;

use CourseBundle\Entity\Course;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SchoolBundle\Entity\School
 *
 * @ORM\Entity
 * @ORM\Table(name="schools")
 */
class School
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var String $name
     *
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    protected $name;


    /**
     * @var Collection $schoolCourses
     *
     * @ORM\OneToMany(targetEntity="CourseBundle\Entity\Course", mappedBy="school", cascade={ "persist", "remove"}, orphanRemoval=true)
     */
    protected $schoolCourses;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Collection
     */
    public function getSchoolCourses()
    {
        return $this->schoolCourses;
    }

    /**
     * @param Collection $schoolCourses
     */
    public function setSchoolCourses($schoolCourses)
    {
        $this->schoolCourses = $schoolCourses;
    }

    /**
     *
     * @param Course $productVariant
     */
    public function addSchoolCourses(Course $schoolCourses)
    {
        $this->schoolCourses[] = $schoolCourses;
    }

    public function __toString()
    {
       return $this->getName();
    }


}