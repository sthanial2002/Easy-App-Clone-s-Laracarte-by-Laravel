<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ScopeDate ;

class Message extends Model
{
    use ScopeDate  ;


    protected $fillable = ['name','email','message'];

    
}
