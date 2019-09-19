<?php

namespace Dnv\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Dnv\User;

class MenusPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function save(User $user)
    {
        return $user->canDo('EDIT_MENU');
    }
}
