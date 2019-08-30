<?php

namespace Dnv\Http\Controllers;

use Dnv\Repositories\MenusRepositopy;
use Illuminate\Http\Request;
use Dnv\Http\Requests;
use Menu;

class DnvController extends Controller
{
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;
    protected $c_rep;
    protected $keywords;
    protected $description;
    protected $title;
    protected $template;
    protected $vars = array();
    protected $contentRightBar = false;
    protected $contentLeftBar = false;
    protected $bar = 'no';

    public function __construct(MenusRepositopy $m_rep)
    {
        $this->m_rep = $m_rep;
    }

    protected function renderOutput()
    {
        $menu = $this->getMenu();
        // Header top
        $headerTop = view(env('DNV').'.headerTop')->render();
        $this->vars = array_add($this->vars,'headerTop',$headerTop);
        // Header navigation
        $navigation = view(env('DNV').'.navigation')->with('menu',$menu)->render();
        $this->vars = array_add($this->vars,'navigation',$navigation);
        // Content
        if ($this->contentRightBar) {
            $rightBar = view(env('DNV').'.rightBar')->with('content_rightBar',$this->contentRightBar)->render();
            $this->vars = array_add($this->vars,'rightBar',$rightBar);
        }
        // Bar
        $this->vars = array_add($this->vars,'bar',$this->bar);
        // Keywords, description, title
        $this->vars = array_add($this->vars,'keywords',$this->keywords);
        $this->vars = array_add($this->vars,'description',$this->description);
        $this->vars = array_add($this->vars,'title',$this->title);
        // Footer
        $footer = view(env('DNV').'.footer')->render();
        $this->vars = array_add($this->vars,'footer',$footer);
        // OffCanvas
        $offCanvas = view(env('DNV').'.offCanvas')->with('menu',$menu)->render();
        $this->vars = array_add($this->vars,'offCanvas',$offCanvas);

        return view($this->template)->with($this->vars);
    }

    protected function getMenu()
    {
        $menu = $this->m_rep->get();
        $mBuilder = Menu::make('MyNav', function ($m) use ($menu) {
            foreach ($menu as $item) {
                if ($item->parent == 0) {
                    $m->add($item->title, $item->path)->id($item->id);
                } else {
                    if ($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->title, $item->path)->id($item->id);
                    }
                }
            }
        });
        return $mBuilder;
    }
}
