<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{
    public function pagination(){

        $users = User::paginate(50);
        return view('home', compact('users'));
        
    }

}
