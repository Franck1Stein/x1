<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    //protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function uploadAvatar($image) {

        $filename = $image->getClientOriginalName();

        (new self())->deleteOldImage();

        $image->storeAs('images', $filename, 'public');
        auth()->user()->update(['avatar' => $filename]);
    }

    protected function deleteOldImage() {

        if(auth()->user()->avatar) {
            Storage::delete('/public/images/' . auth()->user()->avatar);
        }
    }

    /**
     * We are trying to set something...
     * We are trying to set the password before it enters the db
     */

    /**
     * public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }*/

    /**
     * We are trying to get Something and display it to the user
     * let's format the user name a lil bit

    public function getNameAttribute($name) {
        return 'user name is: ' . ucfirst($name);
    }*/
}
