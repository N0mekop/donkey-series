<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_AMERICAN_HORROR_STORY_1));
        $episode->setSummary("Summary-AHS-S1-E1");
        $episode->setTitle("Titre AHS-S1-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_BLACK_MIRROR_1));
        $episode->setSummary("Summary-BM-S1-E1");
        $episode->setTitle("Titre BM-S1-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(2);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_BLACK_MIRROR_1));
        $episode->setSummary("Summary-BM-S1-E2");
        $episode->setTitle("Titre BM-S1-E2");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_BLACK_MIRROR_2));
        $episode->setSummary("Summary-AHS-S2-E1");
        $episode->setTitle("Titre BM-S2-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(2);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_BLACK_MIRROR_2));
        $episode->setSummary("Summary-AHS-S2-E2");
        $episode->setTitle("Titre BM-S2-E2");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(3);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_BLACK_MIRROR_2));
        $episode->setSummary("Summary-AHS-S2-E3");
        $episode->setTitle("Titre BM-S2-E3");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_DIVERGENTE_1));
        $episode->setSummary("Summary-D-S1-E1");
        $episode->setTitle("Titre D-S1-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_DIVERGENTE_2));
        $episode->setSummary("Summary-D-S2-E1");
        $episode->setTitle("Titre D-S2-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_DIVERGENTE_3));
        $episode->setSummary("Summary-D-S1-E3");
        $episode->setTitle("Titre D-S1-E3");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_FEAR_THE_WALKING_DEAD_1));
        $episode->setSummary("Summary-FTWD-S1-E1");
        $episode->setTitle("Titre FTWD-S1-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_GAME_OF_THRONES_1));
        $episode->setSummary("Summary-GOT-S1-E1");
        $episode->setTitle("Titre GOT-S1-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_HERO_CORP_1));
        $episode->setSummary("Synosetpsis-HC-S1-E1");
        $episode->setTitle("Titre HC-S1-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_LOVE_DEATH_AND_ROBOTS_1));
        $episode->setSummary("Summary-LDAR-S1-E1");
        $episode->setTitle("Titre LDAR-S1-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_PENNY_DREADFUL_1));
        $episode->setSummary("Summary-PD-S1-E1");
        $episode->setTitle("Titre PD-S1-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_PLANET_EARTH_II_1));
        $episode->setSummary("Summary-PEII-S1-E1");
        $episode->setTitle("Titre PEII-S1-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_THE_HAUNTING_OF_HILL_HOUSE_1));
        $episode->setSummary("Summary-THOHH-S1-E1");
        $episode->setTitle("Titre THOHH-S1-E1");
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setNumber(1);
        $episode->setSeasonId($this->getReference(SeasonFixtures::SEASON_WALKING_DEAD_1));
        $episode->setSummary("Summary-WD-S1-E1");
        $episode->setTitle("Titre WD-S1-E1");
        $manager->persist($episode);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            SeasonFixtures::class,

        ];
    }
}
