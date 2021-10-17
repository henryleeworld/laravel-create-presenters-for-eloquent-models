<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function show() 
    {
        $user = User::findOrFail(1);
        $user = $user->setAttribute('name', 'Black Widow');
        $user->save();
        echo $user->present()->name . PHP_EOL;
    }
}
