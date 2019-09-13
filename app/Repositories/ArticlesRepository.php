<?php

namespace Dnv\Repositories;

use Dnv\Article;
use Gate;

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
    public function addArticle($request)
    {
        if (Gate::denies('save',$this->model)) {
            abort(403);
        }
        $data = $request->except('_token','image');
        if (empty($data)) {
            return array('error' => 'Нет данных');
        }
        if (empty($data['alias'])) {
            $data['alias'] = $this->transliterate($data['title']);
        }
    }
}