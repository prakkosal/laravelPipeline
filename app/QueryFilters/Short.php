<?php
namespace App\QueryFilters;

use Closure;

class Short extends Filter
{
    // public function handle($requet, Closure $next){
    //     if(!request()->has('short')){
    //         return $next($requet);
    //     }
    //     $builder = $next($requet);
    //     return $builder->orderBy("post", request('short'));
    // }
    protected  function applyFilter($builder)
    {
        return $builder->orderBy("post", request($this->filtername()));
    }
}