<?php

namespace Dnv\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Dnv\Http\Requests;
use Dnv\Http\Controllers\Controller;
use Dnv\Repositories\ArticlesRepository;
use Gate;

class ArticlesController extends AdminController
{
    public function __construct(ArticlesRepository $a_rep)
    {
        parent::__construct();
        if (Gate::denies('VIEW_ADMIN_ARTICLES')) {
            abort(403);
        }
        $this->a_rep = $a_rep;
        $this->template = env('DNV').'.admin.articles';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = 'Редактор статей';
        $articles = $this->getArticles();
        $this->content = view(env('DNV').'.admin.articles_content')->with('articles',$articles)->render();
        return $this->renderOutput();
    }
    public function getArticles()
    {
        return $this->a_rep->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
