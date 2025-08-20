<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        $userName = '';
        foreach ( $users as $user){
            $userName .= '<h1>'. $user->name . '</h1>';
        }
        
        return $userName;
    }
}
