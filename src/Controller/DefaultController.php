<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
  #[Route('/', name: 'home_page')]
  public function index()
  {
    return $this->render('home.html.twig');
  }
}
