<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 13/02/2019
 * Time: 19:33
 */

namespace AppBundle\EventListner;


use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserBundle;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;

class RedirectAfterRegistrationSubscriber implements EventSubscriberInterface
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }
    public function onRegistrationSuccess(FormEvent $event)
    {
        $url = $this->router->generate('homepage');
        $response = new RedirectResponse($url);
        $event->setResponse($response);



    }
    public static function getSubscribedEvents()
    {
        return  [
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess'

        ];
    }


}