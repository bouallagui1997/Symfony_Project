<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\HttpFoundation\Response;


/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\QuestionRepository")
 */
class Question
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="titre_question", type="string", length=255)
     */
    private $titreQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="description_question", type="string", length=255)
     */
    private $descriptionQuestion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_question", type="datetime")
     */
    private $dateQuestion;




    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\User", inversedBy="AppBundle")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */

     protected $user;

    /**
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param int $user
     */
    public function setUser($user)
    {
        $this->user = $user;
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
     * Set titreQuestion
     *
     * @param string $titreQuestion
     *
     * @return Question
     */
    public function setTitreQuestion($titreQuestion)
    {
        $this->titreQuestion = $titreQuestion;

        return $this;
    }

    /**
     * Get titreQuestion
     *
     * @return string
     */
    public function getTitreQuestion()
    {
        return $this->titreQuestion;
    }

    /**
     * Set descriptionQuestion
     *
     * @param string $descriptionQuestion
     *
     * @return Question
     */
    public function setDescriptionQuestion($descriptionQuestion)
    {
        $this->descriptionQuestion = $descriptionQuestion;

        return $this;
    }

    /**
     * Get descriptionQuestion
     *
     * @return string
     */
    public function getDescriptionQuestion()
    {
        return $this->descriptionQuestion;
    }

    /**
     * Set dateQuestion
     *
     * @param \DateTime $dateQuestion
     *
     * @return Question
     */
    public function setDateQuestion($dateQuestion)
    {
        $this->dateQuestion = $dateQuestion;

        return $this;
    }

    /**
     * Get dateQuestion
     *
     * @return \DateTime
     */
    public function getDateQuestion()
    {
        return $this->dateQuestion  ;
    }






}
