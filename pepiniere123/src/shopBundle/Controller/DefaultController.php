<?php

namespace shopBundle\Controller;

use shopBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->render('@shop/Default/index.html.twig', ['products'=>$products]);
    }
}
