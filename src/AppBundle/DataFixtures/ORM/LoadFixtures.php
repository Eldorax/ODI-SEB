<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Lieu;
use AppBundle\Entity\Abonnement;
use AppBundle\Entity\Personne;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Charger le jeu de données dans la base
 */
class LoadFixtures implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function load(ObjectManager $manager)
    {
        $this->loadAbonnement($manager);
        $this->loadPersonne($manager);
    }

    
    private function loadAbonnement(ObjectManager $manager)
    {
        $liste = ['Grand voyageur premium', 'Grand voyageur gold', 'Voyageur'];
        
        foreach ($liste as $item){
            $obj = new Abonnement();
            $obj->setNomabonnement($item);
            $manager->persist($obj);
            $manager->flush();
        }
    }

    private function loadPersonne(ObjectManager $manager)
    {
        $ab1 = $manager->getRepository(Abonnement::class)->find('Grand voyageur premium');
        $ab2 = $manager->getRepository(Abonnement::class)->find('Grand voyageur gold');
        
        
        $liste = [  ['nom'=>'Bond', 'prenom'=>'James', 'email'=>'jb007@gmail.com', 'genre'=>'M', 'abonnement'=>$ab1], 
                    ['nom'=>'Smith', 'prenom'=>'John', 'email'=>'jsmith@gmail.com', 'genre'=>'M', 'abonnement'=>$ab2],
                    ['nom'=>'Dupond', 'prenom'=>'Georges', 'email'=>'gdupond@gmail.com', 'genre'=>'M', 'abonnement'=>$ab1],
                    ['nom'=>'Doe', 'prenom'=>'Jane', 'email'=>'jdoe@gmail.com', 'genre'=>'Mme', 'abonnement'=>$ab1]];
        
        foreach ($liste as $item){
            $obj = new Personne();
            $obj->setNomPersonne($item['nom']);
            $obj->setPrenomPersonne($item['prenom']);
            $obj->setEmail($item['email']);
            $obj->setGenre($item['genre']);
            $obj->setPersonneAbonnement($item['abonnement']);
            $manager->persist($obj);
            $manager->flush();
        }
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
