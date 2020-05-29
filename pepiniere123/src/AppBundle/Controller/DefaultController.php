<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    public function cartAction()

    {

        return $this->render('default/cart.html.twig');

    }
    public function shopAction()









































































    {
        $prods = array(
            array('name'=>'p1','price'=>10),
            array('name'=>'p2','price'=>11),
            array('name'=>'pp','price'=>15),
            array('name'=>'p3','price'=>13)
        );
        return $this->render('default/shop.html.twig',array('products'=>$prods));

    }
    public function reclamationAction()

    {

        return $this->render('default/reclamation.html.twig');

    }
    public function publiciteAction()

    {

        return $this->render('default/publicite.html.twig');

    }
    public function eventAction()

    {

        return $this->render('default/event.html.twig');

    }

}
