<?php 
 namespace App\DataFixtures;

 use App\Entity\Program;
 use App\Entity\Category;
 use Doctrine\Bundle\FixturesBundle\Fixture;
 use Doctrine\Common\DataFixtures\DependentFixtureInterface;
 use Doctrine\Persistence\ObjectManager;

 class ProgramFixtures extends Fixture implements DependentFixtureInterface
 {  
    const PROGRAMS = [
        [
            'title' => 'Walking Dead',
            'synopsis' => 'Des zombies envahissent la terre.',
            'category' => 'category_Action',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 2',
            'synopsis' => 'some texte',
            'category' => 'category_Action',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 3',
            'synopsis' => 'some texte',
            'category' => 'category_Action',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 4',
            'synopsis' => 'some texte',
            'category' => 'category_Action',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 5',
            'synopsis' => 'some texte',
            'category' => 'category_Action',
            'poster' => '/',
        ],
        [
            'title' => 'amelie poulain',
            'synopsis' => 'Des zombies envahissent la terre.',
            'category' => 'category_Aventure',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 6',
            'synopsis' => 'some texte',
            'category' => 'category_Aventure',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 7',
            'synopsis' => 'some texte',
            'category' => 'category_Aventure',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 8',
            'synopsis' => 'some texte',
            'category' => 'category_Aventure',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 9',
            'synopsis' => 'some texte',
            'category' => 'category_Aventure',
            'poster' => '/',
        ],
        [
            'title' => 'starwars',
            'synopsis' => 'Des zombies envahissent la terre.',
            'category' => 'category_Fantastique',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 10',
            'synopsis' => 'some texte',
            'category' => 'category_Fantastique',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 11',
            'synopsis' => 'some texte',
            'category' => 'category_Fantastique',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 12',
            'synopsis' => 'some texte',
            'category' => 'category_Fantastique',
            'poster' => '/',
        ],
        [
            'title' => 'Titre 13',
            'synopsis' => 'some texte',
            'category' => 'category_Fantastique',
            'poster' => '/',
        ],
     ];
    public function load(ObjectManager $manager):void
    { 
        foreach (self::PROGRAMS as $programData) {
             /** @var array{
     *     title: string,
     *     synopsis: string,
     *     category: string,
     *     poster: string
     * } $programData
     */
            $program = new Program();
            $program->setTitle($programData['title']);
            $program->setSynopsis($programData['synopsis']);
            $program->setCategory($this->getReference($programData['category'],Category::class));
            $program->setPoster($programData['poster']);
            $manager->persist($program);
        }
        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
        ];
    }
 }