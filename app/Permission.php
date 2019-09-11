<?php

namespace Dnv;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles()
    {
        return $this->belongsToMany('Dnv\Role','permission_role');
    }
}
