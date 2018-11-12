<?php
namespace App\Controller;

use App\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category/{id}")
     */
    public function show(Category $category)
    {
        return $this->render('category/showCategory.html.twig', [
            'category' => $category,
        ]);
    }
}
