<?php
// src/Controller/ProgramController.php
namespace App\Controller;


use App\Repository\EpisodeRepository;
use App\Repository\SeasonRepository;
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
            throw $this->createNotFoundException('No program found in program\'s table.');
        }
        return $this->render(
            'program/index.html.twig',
            ['website' => 'Donkey Séries', 'programs' => $programs]
        );
    }
    #[Route("/{id<^[0-9]+$>}", name: "show")]
    public function show(int $id, ProgramRepository $ProgramRepository, SeasonRepository $seasonRepository): Response
    {
        $program = $ProgramRepository->findOneBy([
            'id' => $id
        ]);
        $seasons = $seasonRepository->findBy([
            'program_id' => $program->getId()
        ]);
        if (!$program) {
            throw $this->createNotFoundException('No program with id : ' . $id . ' found in program\'s table.');
        }
        return $this->render(
            'program/show.html.twig',
            [
                'program' => $program,
                'seasons' => $seasons,
            ]
        );
    }
    #[Route("/{programId<\d+>}/seasons/{seasonId<\d+>}", name: "season_show")]
    public function showSeason(int $programId, int $seasonId, ProgramRepository $programRepository, EpisodeRepository $episodeRepository, SeasonRepository $seasonRepository): Response
    {
        $program = $programRepository->findOneBy([
            'id' => $programId,
        ]);
        $season = $seasonRepository->findOneBy([
            'id' => $seasonId,
        ]);
        $episodes = $episodeRepository->findBy([
            'season_id' => $season->getId(),
        ]);
        return $this->render(
            'program/season_show.html.twig',
            [
                'program' => $program,
                'season' => $season,
                'episodes' => $episodes,
            ]
        );
    }
}
