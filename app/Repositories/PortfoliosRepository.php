<?php

namespace Dnv\Repositories;

use Dnv\Portfolio;

class PortfoliosRepository extends Repository
{
    public function __construct(Portfolio $portfolio)
    {
        $this->model = $portfolio;
    }
}