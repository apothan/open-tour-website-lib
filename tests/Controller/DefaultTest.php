<?php
// tests/Controller/PagesTest.php
namespace App\Tests\Controller;

use Apothan\OpenTourLibBundle\Service\Menu;
use Apothan\OpenTourLibBundle\Service\Products;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultTest extends WebTestCase
{
    public function testHomePage(): void
    {
        // This calls KernelTestCase::bootKernel(), and creates a
        // "client" that is acting as the browser
        $client = static::createClient();

        // Request a specific page
        $crawler = $client->request('GET', '/');

        // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('a', 'Open Tours');
    }

    public function testTourPage(): void
    {
       
        $client = static::createClient();

        $container = static::getContainer();

        $product = $container->get(Products::class);
        $tours = $product->getTours();

        $crawler = $client->request('GET', '/Tour/'.$tours[0]->getId());

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h3', 'Rome');
    }

    public function testIndexPage(): void
    {
       
        $client = static::createClient();

        $container = static::getContainer();

        $menu = $container->get(Menu::class);
        $menuItems = $menu->getMenuitems();

        $cat = null;
        foreach($menuItems['countries'] as $country)
            if($country['code'] == 'IT')
                foreach($country['categories'] as $category)
                    if(strpos($category['name'], 'Tour'))
                    {
                        $cat = $category['id'];
                        break 2;
                    }

        $crawler = $client->request('GET', '/Country/IT/Category/'.$cat);

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h4', 'Rome');
    }
}