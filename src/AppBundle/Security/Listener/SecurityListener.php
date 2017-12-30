<?php

namespace AppBundle\Security\Listener;

use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Cookie;
use Doctrine\ORM\EntityManager;

class SecurityListener
{
    protected $em;
    public function __construct(SecurityContextInterface $security, Session $session, EntityManager $em)
    {
        $this->security = $security;
        $this->session = $session;
        $this->em = $em;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $user = $this->security->getToken()->getUser();

        //$this->session->set('timezone', $timezone);
    }
    public function onKernelController(FilterControllerEvent $event)
    {
          // $controller = $event->getController();
          // $token = $this->security->getToken();
          // if (!method_exists($token, 'getUser')) {
          //     return;
          // }
          // $user = $this->security->getToken()->getUser();
          // $requestedRoute = $event->getRequest()->get('_route');
          // $ss_route=array('isoftbet_dashboard'
          //
          // );
          // if($user=="anon." && in_array($requestedRoute,$ss_route)){
          //       $url = $controller[0]->generateUrl('fos_user_security_login');
          //       return $controller[0]->redirect($url);
          //       //return new RedirectResponse($controller[0]->generateUrl('fos_user_security_login'));
          // }
          // if (!is_array($controller)) {
          //   return;
          // }
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        // $token = $this->security->getToken();
        // if (!method_exists($token, 'getUser')) {
        //     return;
        // }
        // $user = $this->security->getToken()->getUser();
        // if ($user != 'anon.' && $user && method_exists($user, 'getUserUniqueKey')) {
        //     $event->getResponse()->headers->setCookie(new Cookie('ll_u_k', $user->getUserUniqueKey(), time() + 2592000, '/', null, false, false));
        //     $event->getResponse()->headers->setCookie(new Cookie('ll_exam_choosen', $user->getDefaultStudyScheduleType(), time() + 2592000, '/', null, false, false));
        //     $instances = array("inst1","inst2","inst3","inst4");
        //     shuffle($instances);
        //     $event->getResponse()->headers->setCookie(new Cookie('elb_li', $instances[0], time() + 2592000, '/', null, false, false));
        // } else {
        //     $event->getResponse()->headers->setCookie(new Cookie('ll_u_k', null, 0, '/', null, false, false));
        //     $event->getResponse()->headers->setCookie(new Cookie('ll_exam_choosen', null, 0, '/', null, false, false));
        //     $event->getResponse()->headers->setCookie(new Cookie('elb_li', null, 0, '/', null, false, false));
        // }
    }
}
