<?php

namespace WovoSoft\Menu\Tests;

use WovoSoft\Menu\MenuBuilder;
use WovoSoft\Menu\MenuItem;
use Illuminate\Config\Repository;

class MenuBuilderTest extends TestCase
{
    /** @test */
    public function it_makes_a_menu_item()
    {
        $builder = new MenuBuilder('main', app(Repository::class));

        self::assertInstanceOf(MenuItem::class, $builder->url('hello', 'world'));
    }
}
