<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\HttpFoundation\Response;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\ReponseRepository")
 */
class Reponse
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
    * @ORM\ManyToOne(targetEntity="ForumBundle\Entity\Question")
    * @ORM\JoinColumn(name="id_question",referencedColumnName="id",onDelete="cascade")
    */

     private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="description_reponse", type="string", length=255)
     */
    private $descriptionReponse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reponse", type="datetime")
     */
    private $dateReponse;




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
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



    /**
     * Set descriptionReponse
     *
     * @param string $descriptionReponse
     *
     * @return Reponse
     */
    public function setDescriptionReponse($descriptionReponse)
    {
        $this->descriptionReponse = $descriptionReponse;

        return $this;
    }

    /**
     * Get descriptionReponse
     *
     * @return string
     */
    public function getDescriptionReponse()
    {
        return $this->descriptionReponse;
    }

    /**
     * Set dateReponse
     *
     * @param \DateTime $dateReponse
     *
     * @return Reponse
     */
    public function setDateReponse($dateReponse)
    {
        $this->dateReponse = $dateReponse;

        return $this;
    }

    /**
     * Get dateReponse
     *
     * @return \DateTime
     */
    public function getDateReponse()
    {
        return $this->dateReponse;
    }

    /**
     * Set idQuestion
     *
     * @param integer $idQuestion
     *
     * @return Reponse
     */
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }

    /**
     * Get idQuestion
     *
     * @return int
     */
    /*
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }
*/
    /**
     * Set question
     *
     * @param Question $question
     *
     * @return Reponse
     */
    public function setQuestion(Question $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return Question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
