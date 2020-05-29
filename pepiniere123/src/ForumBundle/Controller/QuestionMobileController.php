<?php


namespace ForumBundle\Controller;
use ForumBundle\Entity\Question;
use ForumBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use ForumBundle\Form\QuestionType;
use Symfony\Component\HttpFoundation\Response;



use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

class QuestionMobileController extends Controller
{

    /**
     * @Route("/listeQuestionMobile", name="listeQuestionMobile")
     */
    public function AfficherDbMobileAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $listeQuestion = $em->getRepository("ForumBundle:Question")->findAll();

       // return $this->render('@Forum/question/listeQuestion.html.twig', ['listeQuestion' => $listeQuestion, 'username'=>get_current_user()]);

        $serializer = new Serializer([new DateTimeNormalizer(), new ObjectNormalizer()]);
        $formatted = $serializer->normalize(['listeQuestion' => $listeQuestion, 'username'=>get_current_user()]);
        return new JsonResponse($formatted);


    }

    /**
     * @Route("/ajoutQuestionMobile", name="ajoutQuestionMobile")
     */
    public function ajouterQestionAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $question = new Question();
        $question->setTitreQuestion($request->get('titreQuestion'));
        $question->setDescriptionQuestion($request->get('descriptionQuestion'));
        $question->setDateQuestion(new \DateTime());
        $usr= $em->getRepository("AppBundle:User")->find($request->query->get("id"));
        $question->setUser($usr);
        $em->persist($question);
        $em->flush();
        $serializer = new Serializer([new DateTimeNormalizer(), new ObjectNormalizer()]);
        $formatted = $serializer->normalize([$question]);
        return new JsonResponse($formatted);



    }

    /**
     * @Route("/affichequestion", name="affichequestion")
     */
    public function affichequestionAction()
    {

        $id=$_GET["id"];
        $titre=$_GET["titre"];
        $description=$_GET["description"];
        $dates=$_GET["date"];
        $serializer = new Serializer([new DateTimeNormalizer(), new ObjectNormalizer()]);
        $formatted = $serializer->normalize(
            array("id"=>$id,"titre"=>$titre,
                "description"=>$description,
                "datequestion"=>$dates|date($dates),
                'username'=>get_current_user())

        );
        return new JsonResponse($formatted);

        /*
        return $this->render("@Forum/question/question.html.twig",
            array("chaine"=>$string,"id"=>$id,"titre"=>$titre,
                "description"=>$description,
                "datequestion"=>$dates|date($dates),
                'username'=>get_current_user()));
        */
    }
    /**
     * @Route("/deletequestionMobile/{id}/", name="deletequestionMobile")
     */

    public function deletequestionMobileAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository(Question::class)->find($id);
        $em->remove($question);
        $em->flush();

        $serializer = new Serializer([new DateTimeNormalizer(), new ObjectNormalizer()]);
        $formatted = $serializer->normalize($question);
        return new JsonResponse($formatted);
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