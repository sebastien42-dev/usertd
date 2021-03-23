<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $aUserNom = ['DIEUX','BOIVIN','VIDAL','JOUX'];
        $aUserPrenom = ['Alexandre','Samuel','Xavier','Keziah'];
        $aUserAdresse = ['2 rue emile noirot','3 rue de la republique','5 rue g. giraud','5 avenue de paris'];
        $aUserVille = ['ROANNE','LE COTEAU','MABLY','RIORGES'];
        $aUserCode = [42300,42120,42300,42153];



        for ($i=0; $i < count($aUserNom) ; $i++) { 
            $user = new User();
            $user->setNom($aUserNom[$i]);
            $user->setPrenom($aUserPrenom[$i]);
            $user->setAdresse($aUserAdresse[$i]);
            $user->setVille($aUserVille[$i]);
            $user->setCodePostal($aUserCode[$i]);

            $manager->persist($user);

            $manager->flush();
        }
        
    }
}
