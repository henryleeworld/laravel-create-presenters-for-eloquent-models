<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display the resource.
     */
    public function show()
    {
        $user = User::findOrFail(1);
        $user = $user->setAttribute('name', __('Frieren'));
        $user->save();
        echo __('User name: ') . $user->present()->name . PHP_EOL;
    }
}
