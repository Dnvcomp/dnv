<?php

namespace Dnv\Repositories;

use Dnv\Article;

class ArticlesRepository extends Repository
{
    public function __construct(Article $articles)
    {
        $this->model = $articles;
    }
    public  function one($alias, $attribute = array())
    {
        $article = parent::one($alias, $attribute);
        if ($article && !empty($attribute)) {
            $article->load('comments');
            $article->comments->load('user');
        }
        return $article;
    }
}