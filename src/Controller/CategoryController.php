<?php
// src/Controller/CategoryController.php
namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/category', name: 'category_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository
            ->findAll();
        if (!$categories) {
            throw $this->createNotFoundException(
                'No category found in category\'s table.'
            );
        }
        return $this->render(
            'category/index.html.twig',
            ['categories' => $categories,]
        );
    }
    #[Route("/new", name: "new")]
    public function new(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $entityManager = $managerRegistry->getManager();
            $entityManager->persist($category);
            $entityManager->flush();
            return $this->redirectToRoute('category_index');
        }
        return $this->render('category/new.html.twig', ["form" => $form->createView()]);
    }
    #[Route('/{categoryName}', name: 'show')]
    public function show(string $categoryName, CategoryRepository $categoryRepository, ProgramRepository $programRepository): Response
    {
        $category = $categoryRepository
            ->findOneByName($categoryName);
        if (!$category) {
            throw $this->createNotFoundException(
                'No category found in category\'s table.'
            );
        } else {
            $programs = $programRepository
                ->findBy(
                    ['category' => $category->getId()],
                    ['id' => 'DESC'],
                    3,
                );
            if (!$programs) {
                throw $this->createNotFoundException(
                    'No program found in program\'s table.'
                );
            } else {
                return $this->render(
                    'category/show.html.twig',
                    [
                        'categoryName' => $categoryName,
                        'programs' => $programs
                    ]
                );
            }
        }
    }
}
