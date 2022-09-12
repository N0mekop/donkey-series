<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Program;
use App\Repository\CategoryRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{

    public const PROGRAM_WALKING_DEAD = "Walking Dead";
    public const PROGRAM_THE_HAUNTING_OF_HILL_HOUSE = "The Haunting Of Hill House";
    public const PROGRAM_AMERICAN_HORROR_STORY = "American Horror Story";
    public const PROGRAM_LOVE_DEATH_AND_ROBOTS = "Love Death And Robots";
    public const PROGRAM_PENNY_DREADFUL = "Penny Dreadful";
    public const PROGRAM_FEAR_THE_WALKING_DEAD = "Fear The Walking Dead";
    public const PROGRAM_HERO_CORP = "Hero Corp";
    public const PROGRAM_GAME_OF_THRONES = "Game of Thrones";
    public const PROGRAM_PLANET_EARTH_II = "Planet Earth II";
    public const PROGRAM_DIVERGENTE = "Divergente";
    public const PROGRAM_BLACK_MIRROR = "Black Mirror";

    public function load(ObjectManager $manager): void
    {

        $program = new Program();
        $program->setTitle(self::PROGRAM_WALKING_DEAD);
        $program->setSummary("Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants.");
        $program->setPoster("https://m.media-amazon.com/images/M/MV5BZmFlMTA0MmUtNWVmOC00ZmE1LWFmMDYtZTJhYjJhNGVjYTU5XkEyXkFqcGdeQXVyMTAzMDM4MjM0._V1_.jpg");
        $program->setCategory($this->getReference(CategoryFixtures::CATEGORIES[5]));
        $this->addReference(self::PROGRAM_WALKING_DEAD, $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle(self::PROGRAM_THE_HAUNTING_OF_HILL_HOUSE);
        $program->setSummary("Plusieurs frères et sœurs qui, enfants, ont grandi dans la demeure qui allait devenir la maison hantée la plus célèbre des États-Unis, sont contraints de se réunir pour finalement affronter les fantômes de leur passé.");
        $program->setPoster("https://m.media-amazon.com/images/M/MV5BMTU4NzA4MDEwNF5BMl5BanBnXkFtZTgwMTQxODYzNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg");
        $program->setCategory($this->getReference(CategoryFixtures::CATEGORIES[5]));
        $this->addReference(self::PROGRAM_THE_HAUNTING_OF_HILL_HOUSE, $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle(self::PROGRAM_AMERICAN_HORROR_STORY);
        $program->setSummary("A chaque saison, son histoire. American Horror Story nous embarque dans des récits à la fois poignants et cauchemardesques, mêlant la peur, le gore et le politiquement correct.");
        $program->setPoster("https://m.media-amazon.com/images/M/MV5BODZlYzc2ODYtYmQyZS00ZTM4LTk4ZDQtMTMyZDdhMDgzZTU0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg");
        $program->setCategory($this->getReference(CategoryFixtures::CATEGORIES[5]));
        $this->addReference(self::PROGRAM_AMERICAN_HORROR_STORY, $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle(self::PROGRAM_LOVE_DEATH_AND_ROBOTS);
        $program->setSummary("Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons assoiffés de sang : tout ce beau monde est réuni dans 18 courts métrages animés déconseillés aux âmes sensibles.");
        $program->setPoster("https://m.media-amazon.com/images/M/MV5BMTc1MjIyNDI3Nl5BMl5BanBnXkFtZTgwMjQ1OTI0NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg");
        $program->setCategory($this->getReference(CategoryFixtures::CATEGORIES[5]));
        $this->addReference(self::PROGRAM_LOVE_DEATH_AND_ROBOTS, $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle(self::PROGRAM_PENNY_DREADFUL);
        $program->setSummary("Dans le Londres ancien, Vanessa Ives, une jeune femme puissante aux pouvoirs hypnotiques, allie ses forces à celles d Ethan, un garçon rebelle et violent aux allures de cowboy, et de Sir Malcolm, un vieil homme riche aux ressources inépuisables.  Ensemble, ils combattent un ennemi inconnu, presque invisible, qui ne semble pas humain et qui massacre la population.");
        $program->setPoster("https://m.media-amazon.com/images/M/MV5BNmE5MDE0ZmMtY2I5Mi00Y2RjLWJlYjMtODkxODQ5OWY1ODdkXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_SY1000_CR0,0,695,1000_AL_.jpg");
        $program->setCategory($this->getReference(CategoryFixtures::CATEGORIES[5]));
        $this->addReference(self::PROGRAM_PENNY_DREADFUL, $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle(self::PROGRAM_FEAR_THE_WALKING_DEAD);
        $program->setSummary("La série se déroule au tout début de l épidémie relatée dans la série-mère The Walking Dead et se passe dans la ville de Los Angeles, et non à Atlanta. Madison est conseillère dans un lycée de Los Angeles. Depuis la mort de son mari, elle élève seule ses deux enfants : Alicia, excellente élève qui découvre les premiers émois amoureux, et son grand frère Nick qui a quitté la fac et a sombré dans la drogue.");
        $program->setPoster("https://m.media-amazon.com/images/M/MV5BYWNmY2Y1NTgtYTExMS00NGUxLWIxYWQtMjU4MjNkZjZlZjQ3XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg");
        $program->setCategory($this->getReference(CategoryFixtures::CATEGORIES[5]));
        $this->addReference(self::PROGRAM_FEAR_THE_WALKING_DEAD, $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle(self::PROGRAM_HERO_CORP);
        $program->setSummary("Les supers héros de l'agence d'état 'Hero Corp' perdent leurs pouvoirs en vieillissant. La crédibilité des héros est en danger et l'agence menace de fermer. Il faut trouver et former de nouveaux héros pour combattre le crime.");
        $program->setPoster("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKAVeaUT6qn7x_rAeb-HGb-MvKyez9_p-osg&usqp=CAU");
        $program->setCategory($this->getReference(CategoryFixtures::CATEGORIES[1]));
        $this->addReference(self::PROGRAM_HERO_CORP, $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle(self::PROGRAM_GAME_OF_THRONES);
        $program->setSummary("Neuf nobles familles se battent pour le contrôle des terres mythiques de Westeros, tandis qu'un ancien ennemi revient après avoir été endormi pendant des milliers d'années.");
        $program->setPoster("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlkvUE7ovbx0DYD-EAyFlIuJ2TD0DTR07U3g&usqp=CAU");
        $program->setCategory($this->getReference(CategoryFixtures::CATEGORIES[0]));
        $this->addReference(self::PROGRAM_GAME_OF_THRONES, $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle(self::PROGRAM_PLANET_EARTH_II);
        $program->setSummary("David Attenborough revient avec un nouveau documentaire sur la faune qui montre la vie dans une variété d'habitats.");
        $program->setPoster("https://m.media-amazon.com/images/I/81Pd2PRJovL._AC_SY445_.jpg");
        $program->setCategory($this->getReference(CategoryFixtures::CATEGORIES[2]));
        $this->addReference(self::PROGRAM_PLANET_EARTH_II, $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle(self::PROGRAM_DIVERGENTE);
        $program->setSummary("Dans un monde divisé en cinq clans selon leur vertus, Tris apprend qu'elle est divergente et qu'elle n'intègrera aucun des clans. Lorsqu'elle découvre un complot visant à détruire les Divergents, Tris et le mystérieux Quatre devront découvrir ce qui rend les Divergents dangereux avant qu'il ne soit trop tard.");
        $program->setPoster("https://images-na.ssl-images-amazon.com/images/I/719+3xjOFBL.jpg");
        $program->setCategory($this->getReference(CategoryFixtures::CATEGORIES[3]));
        $this->addReference(self::PROGRAM_DIVERGENTE, $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle(self::PROGRAM_BLACK_MIRROR);
        $program->setSummary("Une série d'anthologie explorant un monde tourné vers la haute technologie où se heurtent les plus grandes innovations et les instincts les plus sombres de l'humanité.");
        $program->setPoster("https://images-eu.ssl-images-amazon.com/images/I/81IvAOhWg2L.__AC_SX300_SY300_QL70_ML2_.jpg");
        $program->setCategory($this->getReference(CategoryFixtures::CATEGORIES[4]));
        $this->addReference(self::PROGRAM_BLACK_MIRROR, $program);
        $manager->persist($program);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
