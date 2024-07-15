<?php

namespace App\Actions\Jetstream;


use Laravel\Jetstream\Contracts\DeletesUsers;
use Illuminate\Foundation\Auth\User;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     */
    public function delete(User $user): void
    {
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
    }
}
