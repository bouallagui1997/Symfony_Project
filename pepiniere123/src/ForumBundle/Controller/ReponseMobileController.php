<?php
/**
 * Created by PhpStorm.
 * User: abbes
 * Date: 28/04/2019
 * Time: 12:09 AM
 */

namespace ForumBundle\Controller;

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
class ReponseMobileController extends Controller
{
    /**
     * @Route("/affichereponseMobile/{id}/", name="affichereponseMobile")
     */
    public function affichereponseMobileAction($id)
    {

        $reponse= $this->getDoctrine()->getRepository(Reponse::class)->findBy(
            array('question'=>$id));

        $serializer = new Serializer([new DateTimeNormalizer(), new ObjectNormalizer()]);
        $formatted = $serializer->normalize(
            array('reponse'=>$reponse,'username'=>get_current_user())
        );
        return new JsonResponse($formatted);

    }

    /**
     * @Route("/deletereponseMobile/{idrep}/", name="deletereponseMobile")
     */

    public function deletereponseAction($idrep)
    {
        $em = $this->getDoctrine()->getManager();
        $reponse = $em->getRepository(Reponse::class)->find($idrep);
        $em->remove($reponse);
        $em->flush();
        $serializer = new Serializer([new DateTimeNormalizer(), new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reponse);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/ajoutReponseMobile", name="ajoutReponseMobile")
     */

    public function ajouteReponseAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $reponse = new Reponse();

        $reponse->setDescriptionReponse($request->get('descriptionReponse'));
        $reponse->setDateReponse(new \DateTime());
      //  $reponse->setIdQuestion($request->get('idQuestion'));

        $question= $em->getRepository("ForumBundle:Question")->find($request->query->get("id"));
        $reponse->setQuestion($question);

        $em->persist($reponse);
        $em->flush();
        $serializer = new Serializer([new DateTimeNormalizer(), new ObjectNormalizer()]);
        $formatted = $serializer->normalize([$reponse]);
        return new JsonResponse($formatted);

    }



    /**
     * @Route("/modifierreponseMobile/{idrep}/", name="modifierreponseMobile")
     */

    public function modifierreponseAction(Request $request, $idrep)
    {
        $reponse = $this->getDoctrine()->getRepository(
            Reponse::class)->find($idrep);

            $em = $this->getDoctrine()->getManager();

        $reponse->setDescriptionReponse($request->get('descriptionReponse'));
        $reponse->setDateReponse(new \DateTime());
        $question= $em->getRepository("ForumBundle:Question")->find($request->query->get("id"));
        $reponse->setQuestion($question);



            $em->flush();
        $serializer = new Serializer([new DateTimeNormalizer(), new ObjectNormalizer()]);
        $formatted = $serializer->normalize([$reponse]);
        return new JsonResponse($formatted);


    }


}