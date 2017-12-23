<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller{
      public function IndexAction(){
          return $this->render('AppBundle:Dashboard:index.html.twig');
      }
}
