<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'user_id';

   protected $fillable = [
        'user_mail',
        'user_pass',
        'user_familyname',
        'user_firstname',
        'user_kana_familyname',
        'user_kana_firstname',
        'user_sex',
        'user_tel',
        'user_address',
        'user_birthday_year',
        'user_birthday_month',
        'user_birthday_day',
        'user_newsletter',
        'user_comment',
    ];

    protected $hidden = [
        'user_pass', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
