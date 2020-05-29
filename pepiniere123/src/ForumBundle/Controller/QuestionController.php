<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\Question;
use ForumBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use ForumBundle\Form\QuestionType;
use Symfony\Component\HttpFoundation\Response;



class QuestionController extends Controller
{
    /**
     * @Route("/listeQuestion", name="listeQuestion")
     */
    public function AfficherDbAction()
    {
        $em = $this->getDoctrine()->getManager();
        $listeQuestion = $em->getRepository("ForumBundle:Question")->findAll();

        return $this->render('@Forum/question/listeQuestion.html.twig', ['listeQuestion' => $listeQuestion, 'username'=>get_current_user()]);


    }
    /**
     * @Route("/listeQuestionDASHBOARD", name="listeQuestionDASHBOARD")
     */

    public function listeQuestionDASHBOARDAction()
    {
        $em = $this->getDoctrine()->getManager();
        $listeQuestion = $em->getRepository("ForumBundle:Question")->findAll();

        return $this->render('@Forum/question/listeQuestionDASHBOARD.html.twig', ['listeQuestion' => $listeQuestion, 'username'=>get_current_user()]);


    }



    /**
     * @Route("/listeQuestionpdf", name="listeQuestionpdf")
     */
    public function QuestionpdfAction()
    {

        $em = $this->getDoctrine()->getManager();
        $listeQuestion = $em->getRepository("ForumBundle:Question")->findAll();

        $snappy=$this->get("knp_snappy.pdf");
        $html = $this->renderView("@Forum/question/listequestionpdf.html.twig", array(
            "title" =>"liste_des_question_filtrer_pdf",
            'listeQuestion' => $listeQuestion
        ));
        $filename="question_filtrer_pdf";


        return new  Response(
            $snappy->getOutputFromHtml($html),
            200,

            array(
                'Content-Type' =>'application/pdf',
                'Content-Disposition' =>'inline; filename"'.$filename.'.pdf"',
            )
        );



    }



    /**
     * @Route("/listeQuestionpdfDASHBOARD", name="listeQuestionpdfDASHBOARD")
     */
    public function QuestionpdfDASHBOARDAction()
    {

        $em = $this->getDoctrine()->getManager();
        $listeQuestion = $em->getRepository("ForumBundle:Question")->findAll();

        $snappy=$this->get("knp_snappy.pdf");
        $html = $this->renderView("@Forum/question/listequestionpdfDASHBOARD.html.twig", array(
            "title" =>"liste_des_question_filtrer_DASHBOARD_pdf",
            'listeQuestion' => $listeQuestion
        ));
        $filename="question_filtrer_pdf_DASHBOARD";


        return new  Response(
            $snappy->getOutputFromHtml($html),
            200,

            array(
                'Content-Type' =>'application/pdf',
                'Content-Disposition' =>'inline; filename"'.$filename.'.pdf"',
            )
        );



    }








    /**
     * @Route("/ajoutQuestion", name="ajoutQuestion")
     */
    public function ajouterQestionAction(Request $request)
    {
        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);
        $form = $form->handleRequest($request);
        $usr= $this->getUser();
      // var_dump($usr);
        if ($form->isValid()) {
            $question->setDateQuestion(new \DateTime());

            $question->setUser($usr);

            $em = $this->getDoctrine()->getManager();
            $em->persist($question);

            $em->flush();
            return $this->redirectToRoute("listeQuestion");
        }
        return $this->render('@Forum/question/ajouterQuestion.html.twig', array(
            'form' => $form->createView(),
            'question'=>$question,
           // 'id'=>$usr,

        ));
    }
    /**
     * @Route("/affichequestion", name="affichequestion")
     */
    public function affichequestionAction()
    {
        $string=array("Detail de question");
        $id=$_GET["id"];
        $titre=$_GET["titre"];
        $description=$_GET["description"];
        $dates=$_GET["date"];
        return $this->render("@Forum/question/question.html.twig",
            array("chaine"=>$string,"id"=>$id,"titre"=>$titre,
                "description"=>$description,
                "datequestion"=>$dates|date($dates),
                'username'=>get_current_user()));
    }
    /**
     * @Route("/deletequestion/{id}/", name="deletequestion")
     */

    public function deletequestionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository(Question::class)->find($id);
        $em->remove($question);
        $em->flush();
        return $this->redirectToRoute("listeQuestion");
    }





    /**
     * @Route("/deletequestionDASHBOARD/{id}/", name="deletequestionDASHBOARD")
     */

    public function deletequestionDASHBOARDAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository(Question::class)->find($id);
        $em->remove($question);
        $em->flush();
        return $this->redirectToRoute("listeQuestionDASHBOARD");
    }






    /**
     * @Route("/updatequestion/{id}/", name="updatequestion")
     */
    public function modifierquestionAction(Request $request, $id)
    {
        $question = $this->getDoctrine()->getRepository(/*esm l'entité*/
            Question::class)->find($id);
        //prepare the form with the function: createForm()
        $form = $this->createForm(QuestionType::class, $question);
        //extract the form answer from the received request
        $form->handleRequest($request);
        //if this form is
        if ($form->isSubmitted()) {
            //create an entity manager object
            $em = $this->getDoctrine()->getManager();
            //update the data base with flush
            $em->flush();
            return $this->redirectToRoute('listeQuestion');

        }
        return $this->render('@Forum/question/modifierQuestion.html.twig',
            array('form' => $form->createView()
            ));
    }

}
