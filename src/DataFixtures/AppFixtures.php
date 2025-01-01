<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName('Product 1');
        $product->setDescription('Product 1 description');
        $product->setSize(42);

        $manager->persist($product);

        $product = new Product();
        $product->setName('Product 2');
        $product->setDescription('Product 2 description');
        $product->setSize(36);

        $manager->persist($product);

        $manager->flush();
    }
}
