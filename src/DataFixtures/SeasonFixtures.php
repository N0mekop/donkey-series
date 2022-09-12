<?php

namespace App\DataFixtures;

use App\Entity\Program;
use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{

    public const SEASON_AMERICAN_HORROR_STORY_1 = "AMERICAN_HORROR_STORY - Saison 1";
    public const SEASON_BLACK_MIRROR_1 = "BLACK_MIRROR - Saison 1";
    public const SEASON_BLACK_MIRROR_2 = "BLACK_MIRROR - Saison 2";
    public const SEASON_DIVERGENTE_1 = "DIVERGENTE - Saison 1";
    public const SEASON_DIVERGENTE_2 = "DIVERGENTE - Saison 2";
    public const SEASON_DIVERGENTE_3 = "DIVERGENTE - Saison 3";
    public const SEASON_FEAR_THE_WALKING_DEAD_1 = "FEAR_THE_WALKING_DEAD - Saison 1";
    public const SEASON_GAME_OF_THRONES_1 = "GAME_OF_THRONES - Saison 1";
    public const SEASON_HERO_CORP_1 = "HERO_CORP - Saison 1";
    public const SEASON_PENNY_DREADFUL_1 = "PENNY_DREADFUL - Saison 1";
    public const SEASON_PLANET_EARTH_II_1 = "PLANET_EARTH_II - Saison 1";
    public const SEASON_THE_HAUNTING_OF_HILL_HOUSE_1 = "THE_HAUNTING_OF_HILL_HOUSE - Saison 1";
    public const SEASON_WALKING_DEAD_1 = "WALKING_DEAD - Saison 1";
    public const SEASON_LOVE_DEATH_AND_ROBOTS_1 = "LOVE_DEATH_AND_ROBOTS - Saison 1";


    public function load(ObjectManager $manager): void
    {
        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2022);
        $season->setDescription("Saison 1");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_AMERICAN_HORROR_STORY));
        $this->addReference(self::SEASON_AMERICAN_HORROR_STORY_1, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2020);
        $season->setDescription("Saison 1");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_BLACK_MIRROR));
        $this->addReference(self::SEASON_BLACK_MIRROR_1, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(2);
        $season->setYear(2022);
        $season->setDescription("Saison 2");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_BLACK_MIRROR));
        $this->addReference(self::SEASON_BLACK_MIRROR_2, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2011);
        $season->setDescription("Saison 1");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_DIVERGENTE));
        $this->addReference(self::SEASON_DIVERGENTE_1, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(2);
        $season->setYear(2015);
        $season->setDescription("Saison 2");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_DIVERGENTE));
        $this->addReference(self::SEASON_DIVERGENTE_2, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(3);
        $season->setYear(2016);
        $season->setDescription("Saison 3");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_DIVERGENTE));
        $this->addReference(self::SEASON_DIVERGENTE_3, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2020);
        $season->setDescription("Saison 1");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_FEAR_THE_WALKING_DEAD));
        $this->addReference(self::SEASON_FEAR_THE_WALKING_DEAD_1, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2012);
        $season->setDescription("Saison 1");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_GAME_OF_THRONES));
        $this->addReference(self::SEASON_GAME_OF_THRONES_1, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2008);
        $season->setDescription("Saison 1");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_HERO_CORP));
        $this->addReference(self::SEASON_HERO_CORP_1, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2007);
        $season->setDescription("Saison 1");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_LOVE_DEATH_AND_ROBOTS));
        $this->addReference(self::SEASON_LOVE_DEATH_AND_ROBOTS_1, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2016);
        $season->setDescription("Saison 1");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_PENNY_DREADFUL));
        $this->addReference(self::SEASON_PENNY_DREADFUL_1, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2022);
        $season->setDescription("Saison 1");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_PLANET_EARTH_II));
        $this->addReference(self::SEASON_PLANET_EARTH_II_1, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2013);
        $season->setDescription("Saison 1");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_THE_HAUNTING_OF_HILL_HOUSE));
        $this->addReference(self::SEASON_THE_HAUNTING_OF_HILL_HOUSE_1, $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2014);
        $season->setDescription("Saison 1");
        $season->setProgramId($this->getReference(ProgramFixtures::PROGRAM_WALKING_DEAD));
        $this->addReference(self::SEASON_WALKING_DEAD_1, $season);
        $manager->persist($season);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ProgramFixtures::class,
        ];
    }
}
