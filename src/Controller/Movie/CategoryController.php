<?php

namespace App\Controller\Movie;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/discover', name: 'movie_discover')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render('movie/discover.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/category/{id}', name: 'show_category')]
    public function show(Category $category): Response
    {
        return $this->render('movie/category.html.twig', [
            'category' => $category,
        ]);
    }
}