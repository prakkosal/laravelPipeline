<?php
namespace App\QueryFilters;

use Closure;

class Active extends Filter
{
    // public function handle($requet, Closure $next){

    //     if(!request()->has('is_active')){
    //         return $next($requet);
    //     }
    //     $builder = $next($requet);
    //     return $builder->where("is_active", request('is_active'));
    // }

    protected function applyFilter($builder)
    {
        return $builder->where('is_active', request($this->filtername()));
    }

}