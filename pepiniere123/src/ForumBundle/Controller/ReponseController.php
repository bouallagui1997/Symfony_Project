<?php
/**
 * Created by PhpStorm.
 * User: abbes
 * Date: 19/02/2019
 * Time: 6:54 PM
 */

namespace ForumBundle\Controller;
use ForumBundle\Entity\Reponse;
use ForumBundle\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ForumBundle\Form\ReponseType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
class ReponseController extends Controller
{
    /**
     * @Route("/affichereponse/{id}/", name="affichereponse")
     */
    public function affichereponseAction($id)
    {

        $reponse= $this->getDoctrine()->getRepository(Reponse::class)->findBy(
            array('question'=>$id));


        return $this->render('@Forum/reponse/listereponse.html.twig', array('reponse'=>$reponse,'username'=>get_current_user()));

    }





    /**
     * @Route("/affichereponseDASHBOARD/{id}/", name="affichereponseDASHBOARD")
     */


    public function affichereponseDASHBOARDAction($id)
    {

        $reponse= $this->getDoctrine()->getRepository(Reponse::class)->findBy(
            array('question'=>$id));


        return $this->render('@Forum/reponse/listereponseDASHBOARD.html.twig', array('reponse'=>$reponse,'username'=>get_current_user()));

    }








    /**
     * @Route("/affichereponsepdf/{id}/", name="affichereponsepdf")
     */
    public function affichereponsepdfAction($id)
    {

        $reponse= $this->getDoctrine()->getRepository(Reponse::class)->findBy(
            array('question'=>$id));


        $snappy=$this->get("knp_snappy.pdf");
        $html = $this->renderView("@Forum/reponse/listerReponsepdf.html.twig", array(
            "title" =>"liste_des_reponse_filtrer_pdf",
            'reponse' => $reponse
        ));
        $filename="reponse_pdf";

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
     * @Route("/affichereponsepdfDASHBOARD/{id}/", name="affichereponsepdfDASHBOARD")
     */
    public function affichereponsepdfDASHBOARDAction($id)
    {

        $reponse= $this->getDoctrine()->getRepository(Reponse::class)->findBy(
            array('question'=>$id));


        $snappy=$this->get("knp_snappy.pdf");
        $html = $this->renderView("@Forum/reponse/listerReponsepdfDASHBOARD.html.twig", array(
            "title" =>"liste_des_reponse_filtrer_DASHBOARD_pdf",
            'reponse' => $reponse
        ));
        $filename="reponse_DASHBOARD_pdf";

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
     * @Route("/ajoutReponse/{id}", name="ajoutReponse")
     */

    public function ajouteReponseAction(Request $request,Question $id)
    {

        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form = $form->handleRequest($request);
       // $usr= $this->getUser();

        if ($form->isValid()) {

            $reponse->setQuestion($id);
            $reponse->setDateReponse(new \DateTime());
          //  $reponse->setUser($usr);
            //die('helo');
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();
            $reponse= $this->getDoctrine()->getRepository(Reponse::class)->findBy(
                array('question'=>$id));
            return $this->render('@Forum/reponse/listereponse.html.twig', array('reponse'=>$reponse,'username'=>get_current_user()));

        }
        return $this->render('@Forum/reponse/ajouterReponse.html.twig', array(
            'form' => $form->createView(),
            'reponse'=>$reponse,
            'id'=>$id,
        ));
    }


    /**
     * @Route("/deletereponse/{idrep}/", name="deletereponse")
     */

     public function deletereponseAction($idrep)
     {
         $em = $this->getDoctrine()->getManager();
         $reponse = $em->getRepository(Reponse::class)->find($idrep);
         $em->remove($reponse);
         $em->flush();
         return $this->redirectToRoute("listeQuestion");
     }





    /**
     * @Route("/deletereponseDASHBOARD/{idrep}/", name="deletereponseDASHBOARD")
     */

    public function deletereponseDASHBOARDAction($idrep)
    {
        //get the object to be removed given the submitted id
        $em = $this->getDoctrine()->getManager();
        $reponse = $em->getRepository(Reponse::class)->find($idrep);
        //remove from the ORM
        $em->remove($reponse);
        //update the data base
        $em->flush();
        return $this->redirectToRoute("listeQuestionDASHBOARD");
    }


    /**
     * @Route("/modifierreponse/{idrep}/", name="modifierreponse")
     */

   public function modifierreponseAction(Request $request, $idrep)
    {
        $reponse = $this->getDoctrine()->getRepository(
            Reponse::class)->find($idrep);
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listeQuestion');

        }
        return $this->render('@Forum/reponse/modifierReponse.html.twig',
            array('form' => $form->createView()
            ));
    }



}