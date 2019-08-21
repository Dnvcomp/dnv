<?php

namespace Dnv\Repositories;

use Dnv\Menu;

class MenusRepositopy extends Repository
{
    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }

}