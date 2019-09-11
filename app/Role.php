<?php

namespace Dnv;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('Dnv\User','role_user');
    }
    public function perms()
    {
        return $this->belongsToMany('Dnv\Permission','permission_role');
    }
}
