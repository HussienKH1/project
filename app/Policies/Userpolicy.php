<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Userpolicy
{
    use HandlesAuthorization;


    const SUPERADMIN = 'superadmin';
    const ADMIN = 'admin';
    const BAN = 'ban';
    const DELETE = 'delete';

    public function superadmin(User $user): bool{
        return $user -> isAdmin();
    }

    public function admin (User $user): bool{
        return $user -> isAdmin() || $user -> isWriter();
    }

    public function ban(User $user, User $subject): bool{
        return ($user -> isAdmin() && ! $subject->isAdmin()) || 
        ($user->isWriter() && !$subject->isAdmin() && !$subject->isWriter());
    }

    public function delete(User $user, User $subject){
        return ($user->isAdmin || $user->matches($subject)) && !$subject->isAdmin();
    }
}
