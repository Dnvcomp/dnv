<?php

namespace Dnv\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Dnv\Http\Requests;
use Dnv\Http\Controllers\Controller;

class IndexController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->template = env('DNV').'.admin.index';
    }
    public function index()
    {
        $this->title = 'Панель администратора';
        return $this->renderOutput();
    }
}
