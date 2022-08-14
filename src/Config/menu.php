<?php

return [

    'styles' => [
        // Boostrap 3
        'bs3-navbar' => \WovoSoft\Menu\Presenters\Bootstrap3\Navbar::class,
        'bs3-navbar-right' => \WovoSoft\Menu\Presenters\Bootstrap3\NavbarRight::class,
        'bs3-nav-pills' => \WovoSoft\Menu\Presenters\Bootstrap3\NavPills::class,
        'bs3-nav-tab' => \WovoSoft\Menu\Presenters\Bootstrap3\NavTab::class,
        'bs3-sidebar' => \WovoSoft\Menu\Presenters\Bootstrap3\Sidebar::class,
        'bs3-navmenu' => \WovoSoft\Menu\Presenters\Bootstrap3\Nav::class,

        // Zurb
        'zurb' => \WovoSoft\Menu\Presenters\Foundation\Zurb::class,

        // Admin
        'adminlte' => \WovoSoft\Menu\Presenters\Admin\Adminlte::class,
        'argon' => \WovoSoft\Menu\Presenters\Admin\Argon::class,
        'metronic-horizontal' => \WovoSoft\Menu\Presenters\Admin\MetronicHorizontal::class,
        'tailwind' => \WovoSoft\Menu\Presenters\Admin\Tailwind::class,
        'stisla-sidebar' => \WovoSoft\Menu\Presenters\Admin\StislaSidebar::class,
    ],

    'home_urls' => [
        '/',
    ],

    'ordering' => false,

];
