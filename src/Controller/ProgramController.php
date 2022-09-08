<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/program", name: "program_")]
class ProgramController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProgramRepository $ProgramRepository): Response
    {
        $programs = $ProgramRepository
            ->findAll();
        if (!$programs) {
            throw $this->createNotFoundException(
                'No program found in program\'s table.'
            );
        }
        return $this->render(
            'program/index.html.twig',
            ['website' => 'Donkey Séries', 'programs' => $programs]
        );
    }
    #[Route("/{id<^[0-9]+$>}", name: "show")]
    public function show(int $id, ProgramRepository $ProgramRepository): Response
    {
        $program = $ProgramRepository
            ->findOneBy(
                ['id' => $id]
            );
        if (!$program) {
            throw $this->createNotFoundException(
                'No program with id : ' . $id . ' found in program\'s table.'
            );
        }
        return $this->render(
            'program/show.html.twig',
            [
                'program' => $program,
            ]
        );
    }
}
