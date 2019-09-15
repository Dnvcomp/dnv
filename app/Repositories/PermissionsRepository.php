<?php

namespace Dnv\Repositories;

use Dnv\Permission;

class PermissionsRepository extends Repository
{
    public function __construct(Permission $permission)
    {
        $this->model = $permission;
    }
}
