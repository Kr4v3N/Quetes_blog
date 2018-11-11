<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{page}",
     *     name="blog_show",
     *     requirements={"page"="[a-z0-9-]+"})
     */
    public function show($page='Article Sans Titre')
    {
        $page = str_replace('-', ' ',$page);
        $page = ucwords($page);
        return $this->render('blog/index.html.twig', [
            'page' => $page
        ]);
    }
}
