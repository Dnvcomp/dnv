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

    public function getPortfolios()
    {
        $portfolios = $this->p_rep->get('*', FALSE, TRUE);
        if ($portfolios) {
            $portfolios->load('filter');
        }
        return $portfolios;
    }
}
