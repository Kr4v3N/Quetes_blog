<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 *
 * @package \App\Controller
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/")
     * */

    public function index (){
        $message = "Hello WCS";
        return $this->render('/index.html.twig', ['message' => $message]);

    }

}
