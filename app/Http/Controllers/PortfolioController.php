<?php

namespace Dnv\Http\Controllers;

use Illuminate\Http\Request;
use Dnv\Http\Requests;
use Dnv\Repositories\PortfoliosRepository;

class PortfolioController extends DnvController
{
    public function __construct(PortfoliosRepository $p_rep) {
        parent::__construct(new \Dnv\Repositories\MenusRepositopy(new \Dnv\Menu));
        $this->p_rep = $p_rep;
        $this->template = env('DNV').'.portfolios';
    }

    public function index()
    {
        $this->title = 'Авторы статей';
        $this->keywords = 'Статьи, автор, описание, авторы, текст, статья';
        $this->description = 'Раздел авторов опубликовавших статью.';
        $portfolios = $this->getPortfolios();
        $content = view(env('DNV').'.portfolios_content')->with('portfolios',$portfolios)->render();
        $this->vars = array_add($this->vars,'content',$content);
        return $this->renderOutput();
    }

    public function getPortfolios($take = false, $paginate = true)
    {
        $portfolios = $this->p_rep->get('*', FALSE, $paginate);
        if ($portfolios) {
            $portfolios->load('filter');
        }
        return $portfolios;
    }

    public function show($alias)
    {
        $portfolio = $this->p_rep->one($alias);
        $portfolios = $this->getPortfolios(config('settings.other_portfolios'), false);

        $this->title = $portfolio->title;
        $this->keywords = $portfolio->keywords;
        $this->description = $portfolio->description;

        $content = view(env('DNV').'.portfolio_content')->with(['portfolio' => $portfolio, 'portfolios' => $portfolios])->render();
        $this->vars =array_add($this->vars,'content',$content);

        return $this->renderOutput();
    }

}
