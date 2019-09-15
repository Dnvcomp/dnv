<?php

namespace Dnv\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Dnv\Http\Requests;
use Dnv\Http\Controllers\Controller;
use Auth;
use Menu;

class AdminController extends \Dnv\Http\Controllers\Controller
{
    protected $p_rep;
    protected $a_rep;
    protected $user;
    protected $template;
    protected $content = false;
    protected $title;
    protected $vars;

    public function __construct()
    {
        $this->user = Auth::user();
        if(!$this->user) {
            abort(403);
        }
    }

    public function renderOutput()
    {
        $this->vars = array_add($this->vars,'title',$this->title);
        $menu = $this->getMenu();
        $headerTop = view(env('DNV').'.admin.headerTop')->render();
        $this->vars = array_add($this->vars, 'headerTop',$headerTop);
        $navigation = view(env('DNV').'.admin.navigation')->with('menu',$menu)->render();
        $this->vars = array_add($this->vars, 'navigation',$navigation);
        if($this->content) {
            $this->vars = array_add($this->vars,'content',$this->content);
        }
        $footer = view(env('DNV').'.admin.footer')->render();
        $this->vars = array_add($this->vars,'footer',$footer);
        $offCanvas = view(env('DNV').'.offCanvas')->with('menu',$menu)->render();
        $this->vars = array_add($this->vars,'offCanvas',$offCanvas);
        return view($this->template)->with($this->vars);
    }
    public function getMenu()
    {
        return Menu::make('adminMenu', function($menu) {
            $menu->add('Статьи',array('route'=>'admin.articles.index'));
            $menu->add('Авторы',array('route'=>'admin.articles.index'));
            $menu->add('Меню',array('route'=>'admin.menus.index'));
            $menu->add('Пользователи',array('route'=>'admin.articles.index'));
            $menu->add('Привилегии',array('route'=>'admin.permissions.index'));
        });
    }
}
