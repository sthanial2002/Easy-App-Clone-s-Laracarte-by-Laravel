<?php  

namespace App\Models;

use Carbon\Carbon ;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

trait ScopeDate
{
    public function scopeMonthlyOld(Builder $query)
    {
       $query->where('created_at','<=',Carbon::parse('3 hour ago')) ;
    }

}

 