<?php

namespace Dnv\Repositories;

use Dnv\Slider;

class SlidersRepository extends Repository
{
    public function __construct(Slider $slider)
    {
        $this->model = $slider;
    }
}