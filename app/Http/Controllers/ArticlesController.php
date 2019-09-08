<?php

namespace Dnv\Http\Controllers;

use Dnv\Repositories\ArticlesRepository;
use Dnv\Repositories\CommentsRepository;
use Dnv\Repositories\PortfoliosRepository;
use Dnv\Category;
use Illuminate\Http\Request;

use Dnv\Http\Requests;

class ArticlesController extends DnvController
{
    public function __construct(PortfoliosRepository $p_rep, ArticlesRepository $a_rep, CommentsRepository $c_rep)
    {
        parent::__construct(new \Dnv\Repositories\MenusRepositopy(new \Dnv\Menu));
        $this->p_rep = $p_rep;
        $this->a_rep = $a_rep;
        $this->c_rep = $c_rep;
        $this->bar = 'right';
        $this->template = env('DNV').'.articles';
    }
    public function index($cat_alias = false)
    {
        $this->title = 'Статьи';
        $this->keywords = 'Статьи, описание, авторы, текст, комментарии';
        $this->description = 'Раздел статей разных авторов и комментариев к ним';

        $articles = $this->getArticles($cat_alias);
        $content = view(env('DNV').'.articles_content')->with('articles',$articles)->render();
        $this->vars = array_add($this->vars,'content',$content);
        $comments = $this->getComments(config('settings.latest_comments'));
        $portfolios = $this->getPortfolios(config('settings.latest_portfolios'));
        $this->contentRightBar = view(env('DNV').'.articlesBar')->with(['comments' => $comments, 'portfolios' => $portfolios])->render();
        return $this->renderOutput();
    }

    public function getComments($take)
    {
        $comments = $this->c_rep->get(['text','name','email','article_id','user_id'], $take);
        if ($comments) {
            $comments->load('article','user');
        }
        return $comments;
    }

    public function getportfolios($take)
    {
        $portfolios = $this->p_rep->get(['title','text','alias','customer','img','filter_alias'],$take);
        return $portfolios;
    }

    public function getArticles($alias = false)
    {
        $where = false;
        if ($alias) {
            $id = Category::select('id')->where('alias',$alias)->first()->id;
            $where = ['category_id',$id];
        }
        $articles = $this->a_rep->get(['id','title','text','alias','created_at','img','desc','user_id','category_id','keywords','description'], false, true, $where);
        if ($articles) {
            $articles->load('user','category','comments');
        }
        return $articles;
    }

    public function show($alias = false)
    {
        $article = $this->a_rep->one($alias,['comments' => true]);
        if ($article) {
            $article->img = json_decode($article->img);
        }

        $this->title = $article->title;
        $this->keywords = $article->keywords;
        $this->description = $article->description;

        $content = view(env('DNV').'.article_content')->with('article',$article)->render();
        $this->vars =array_add($this->vars,'content',$content);

        $comments = $this->getComments(config('settings.latest_comments'));
        $portfolios = $this->getPortfolios(config('settings.latest_portfolios'));

        $this->contentRightBar = view(env('DNV').'.articlesBar')->with(['comments' => $comments, 'portfolios' => $portfolios])->render();

        return $this->renderOutput();
    }
}
