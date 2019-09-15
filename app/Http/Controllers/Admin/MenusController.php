<?php

namespace Dnv\Http\Controllers\Admin;

use Menu;
use Dnv\Repositories\ArticlesRepository;
use Dnv\Repositories\MenusRepositopy;
use Dnv\Repositories\PortfoliosRepository;
use Illuminate\Http\Request;
use Gate;
use Dnv\Http\Requests;
use Dnv\Http\Controllers\Controller;

class MenusController extends AdminController
{
    protected $m_rep;
    public function __construct(MenusRepositopy $m_rep, ArticlesRepository $a_rep, PortfoliosRepository $p_rep)
    {
        parent::__construct();
        if (Gate::denies('VIEW_ADMIN_MENU')) {
            abort(403);
        }
        $this->m_rep = $m_rep;
        $this->a_rep = $a_rep;
        $this->p_rep = $p_rep;
        $this->template = env('DNV').'.admin.menus';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = $this->getMenus();
        $this->content = view(env('DNV').'.admin.menus_content')->with('menus',$menu)->render();
        return $this->renderOutput();
    }
    public function getMenus()
    {
        $menu = $this->m_rep->get();
        if ($menu->isEmpty()) {
            return false;
        }
        return Menu::make('forMenuPart',function($m) use($menu) {
            foreach($menu as $item) {
                if($item->parent == 0) {
                    $m->add($item->title,$item->path)->id($item->id);
                } else {
                    if($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->title,$item->path)->id($item->id);
                    }
                }
            }
        });
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
