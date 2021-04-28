<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
// class AppFixtures extends Fixture
{
    // Pour déclencher LOAD à partir du Terminal
    // bin/console doctrine:fixtures:load
    const ARTICLES = [
        ['Label'    => "Produit de la ferme",],
        ['Label'    => "Produit de la mer",],
        ['Label'    => "Produit de la terre",],
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::ARTICLES as $Article) {
            $obArticle = new Category(
                // $Article['Label'],
            );
            $obArticle->setLabel($Article['Label']);
            $manager->persist($obArticle);
        }
        //
        $manager->flush();
    }
}
