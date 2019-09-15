<?php

namespace Dnv\Repositories;

use Dnv\Role;

class RolesRepository extends Repository
{
    public function __construct(Role $role)
    {
        $this->model = $role;
    }
}