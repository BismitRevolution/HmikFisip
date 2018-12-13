<?php

namespace App;

use App\Notifications\AdminResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Admin extends Authenticatable
{
    use Notifiable;

    protected $admin;
    protected $email;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /**protected $fillable = [
        'name', 'email', 'password',
    ];
    */
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function __construct(){
        $this->admin = config('admin.name');
        $this->email = config('admin.email');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPassword($token));
    }
}
