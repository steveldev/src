<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{	
  /**
   * @Route("/", name="app_homepage")
   */
  public function index()
  {		
    return $this->render('front/home.html.twig', [  ]);
  }


}
