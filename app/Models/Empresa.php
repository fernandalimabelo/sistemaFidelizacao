<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\Admin\ResetPasswordNotification;

class Empresa extends Authenticatable
{
    use Notifiable;

    protected $guard = 'empresa';

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    protected $fillable = [
        'name', 'phone', 'address', 'category', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}