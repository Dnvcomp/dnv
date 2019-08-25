<?php

namespace Dnv\Repositories;

use Dnv\Article;

class ArticlesRepository extends Repository
{
    public function __construct(Article $articles)
    {
        $this->model = $articles;
    }
}