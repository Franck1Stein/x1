<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index() {

        $data = [
            'name' => 'kehops',
            'email' => 'kehops@MasterNode.com',
            'password' => 'password',
        ];

        //User::create($data);

         $user = User::all();
//        User::where('id', 2)->delete();
//        User::where('id', 2)->update();

        return $user;
    }
}
