<?php

namespace Src\Application\User\Infrastructure\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";

    protected $fillable = [
        'user_name',
        'first_name',
        'second_name',
        'first_last_name',
        'second_last_name',
        'email',
        'cellphone',
        'password',
        'state_id'
    ];
}
