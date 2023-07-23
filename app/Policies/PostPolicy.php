<?php

namespace App\Policies;

use FFI;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
   
    use HandlesAuthorization;

    const UPDATE = 'update';
    const DELETE = 'delete';

    public function before(User $user){
        return $user -> isAdmin() || $user -> isSuperAdmin();
    }

    public function update(User $user, Post $post): bool{
        return $post -> isAuthoredBy($user);
    }

    public function delete (User $user, Post $post): bool{
        return $post -> isAuthoredBy($user);
    }
   
}
