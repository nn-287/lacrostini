<?php

namespace App\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use \Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Merchant extends Model implements Authenticatable
{
    // use HasFactory;
    use Notifiable;
    use AuthenticableTrait;

    protected $fillable = [
        'name', 'phone', 'email', 'password', 'image', 'status'
    ];


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
