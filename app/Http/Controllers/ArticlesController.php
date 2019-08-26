<?php

namespace Dnv\Http\Controllers;

use Dnv\Repositories\ArticlesRepository;
use Dnv\Repositories\PortfoliosRepository;
use Illuminate\Http\Request;

use Dnv\Http\Requests;

class ArticlesController extends DnvController
{
    public function __construct(PortfoliosRepository $p_rep, ArticlesRepository $a_rep)
    {
        parent::__construct(new \Dnv\Repositories\MenusRepositopy(new \Dnv\Menu));
        $this->p_rep = $p_rep;
        $this->a_rep = $a_rep;
        $this->bar = 'right';
        $this->template = env('DNV').'.articles';
    }
    public function index()
    {
        $articles = $this->getArticles();

        $content = view(env('DNV').'.articles_content')->with('articles',$articles)->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();
    }

    public function getArticles($alias = false)
    {
        $articles = $this->a_rep->get(['id','title','text','alias','created_at','img','desc','user_id','category_id'], false, true);
        if ($articles) {
            // $articles->load('user','category','comments');
        }
        return $articles;
    }
}
