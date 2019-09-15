<?php

namespace Dnv\Http\Controllers\Admin;

use Dnv\Repositories\PermissionsRepository;
use Dnv\Repositories\RolesRepository;
use Illuminate\Http\Request;
use Gate;

use Dnv\Http\Requests;
use Dnv\Http\Controllers\Controller;

class PermissionsController extends AdminController
{
    protected $per_rep;
    protected $rol_rep;
    public function __construct(PermissionsRepository $per_rep, RolesRepository $rol_rep)
    {
        parent::__construct();
        if (Gate::denies('EDIT_USERS')) {
            abort(403);
        }
        $this->per_rep = $per_rep;
        $this->rol_rep = $rol_rep;
        $this->template = env('DNV').'.admin.permissions';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = 'Редактирование прав пользователей';
        $roles = $this->getRoles();
        $permissions = $this->getPermissions();

        $this->content = view(env('DNV').'.admin.permissions_content')->with(['roles'=>$roles,'priv'=>$permissions])->render();
        return $this->renderOutput();
    }
    public function getRoles()
    {
        $roles = $this->rol_rep->get();
        return $roles;
    }
    public function getPermissions()
    {
        $permissions = $this->per_rep->get();
        return $permissions;
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
