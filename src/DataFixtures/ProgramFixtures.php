<?php 
 namespace App\DataFixtures;

 use App\Entity\Program;
 use Doctrine\Bundle\FixturesBundle\Fixture;
 use Doctrine\Persistence\ObjectManager;

 class ProgramFixtures extends Fixture
 {
    public function load(ObjectManager $manager):void
    {
        $program = new Program();
        $program->setTitle('halloween');
        $program->setSynopsis('un gros film d\'horreur');
        $program->setPoster('/');
        $manager->persist($program);
        $manager->flush();

    }
 }