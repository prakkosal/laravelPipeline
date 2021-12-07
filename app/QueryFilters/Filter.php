<?php

namespace App\QueryFilters;
use Illuminate\Support\Str;
use Closure;

abstract class Filter {

    public function handle($requet, Closure $next){

        if(!request()->has($this->filtername())){
            return $next($requet);
        }
        $builder = $next($requet);
        // return $builder->orderBy("post", request('short'));
        return $this->applyFilter($builder);
    }
    protected abstract function applyFilter($builder);

    protected function filtername(){
       return Str::snake(class_basename($this));
    }
}

