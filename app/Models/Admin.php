<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable= [
        'name',
        'email',
        'password',
        'image',
    ];
    protected $guard = 'admin';

    public function guardAdmin()
    {
        return 'admin';
    }
}
