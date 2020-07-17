<?php

namespace App\Policy;

use App\User;

/**
 * @author     Živko Obradović <zozobradovic@gmail.com>
 */
class UserPolicy
{
    public function isAdmin(User $user)
    {
        return $user->role == 'admin' ? true : false; 
    }

    public function isDeveloper(User $user)
    {
        return $user->role == 'developer' ? true : false; 
    }

    public function isPending(User $user)
    {
        return $user->role == 'pending' ? true : false;
    }
}