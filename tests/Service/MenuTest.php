<?php
// tests/Service/MenuTest.php
namespace App\Tests\Service;

use Apothan\OpenTourLibBundle\Service\Menu;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MenuTest extends KernelTestCase
{
    public function testMenuItems()
    {
        // (1) boot the Symfony kernel
        self::bootKernel();

        // (2) use static::getContainer() to access the service container
        $container = static::getContainer();

        // (3) run some service & test the result
        $menu = $container->get(Menu::class);

        $menuItems = $menu->getMenuitems();

        $this->assertArrayHasKey('countries', $menuItems);
    }
}