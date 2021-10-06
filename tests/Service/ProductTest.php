<?php
// tests/Service/MenuTest.php
namespace App\Tests\Service;

use Apothan\OpenTourLibBundle\Service\Products;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProductTest extends KernelTestCase
{
    public function testMenuItems()
    {
        // (1) boot the Symfony kernel
        self::bootKernel();

        // (2) use static::getContainer() to access the service container
        $container = static::getContainer();

        // (3) run some service & test the result
        $product = $container->get(Products::class);

        $tours = $product->getTours();

        $this->assertGreaterThan(0, count($tours));


        $tour = $product->getTour($tours[0]->getId());

        $this->assertIsObject($tour);
    }
}