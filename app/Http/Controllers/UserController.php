<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\UploadedFile;
use App\User;

class UserController extends Controller
{

    public function uploadAvatar(Request $request) {
        //    dd($request->file('image'));
        //    dd($request->hasFile('image'));
        //    $q->image->store('images', 'public');

        if ($request->hasFile('image')) {

            User::uploadAvatar($request->image);

            return redirect()->back()->with('message', 'Image Uploaded'); // success msg
        }

        return redirect()->back()->with('error', 'Image not Uploaded'); // error msg
    }

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
