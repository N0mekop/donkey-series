<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Season;
use App\Entity\Episode;
use App\Entity\Program;
use App\Form\ProgramType;
use App\Repository\EpisodeRepository;
use App\Repository\SeasonRepository;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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
    #[Route('/new', name: 'new_')]
    public function new(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $program = new Program();
        $form = $this->createForm(ProgramType::class, $program);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $entityManager = $managerRegistry->getManager();
            $entityManager->persist($program);
            $entityManager->flush();
            return $this->redirectToRoute('program_app_index');
        }
        return $this->render('program/new.html.twig', [
            "form" => $form->createView(),
        ]);
    }
    #[Route("/{id<^[0-9]+$>}", name: "show")]
    public function show(Program $program, SeasonRepository $seasonRepository): Response
    {
        $seasons = $seasonRepository->findBy([
            'program_id' => $program->getId()
        ]);
        if (!$program) {
            throw $this->createNotFoundException('No program with this id found in program\'s table.');
        }
        return $this->render(
            'program/show.html.twig',
            [
                'program' => $program,
                'seasons' => $seasons,
            ]
        );
    }
    #[Route("/{program}/seasons/{season}", name: "season_show")]
    public function showSeason(Program $program, Season $season, EpisodeRepository $episodeRepository): Response
    {
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
    #[Route("/{program}/seasons/{season}/episode/{episode}", name: "episode_show")]
    public function showEpisode(Program $program, Season $season, Episode $episode): Response
    {
        return $this->render(
            'program/episode_show.html.twig',
            [
                'program' => $program,
                'season' => $season,
                'episode' => $episode,
            ]
        );
    }
}
