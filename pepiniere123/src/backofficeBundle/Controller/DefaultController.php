<?php

namespace backofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('@backoffice/Default/dashboard.html.twig');
    }

    public function categoryAction()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('@backoffice/Default/category.html.twig');
    }
}
