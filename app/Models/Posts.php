<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;
class Posts extends Model
{
    use HasFactory;


    protected static function allPosts(){
        $posts = app(Pipeline::class)
        ->send(Posts::query())->through([
            \App\QueryFilters\Active::class,
            \App\QueryFilters\Short::class
        ])
        ->thenReturn()
        ->paginate(10);
        return  $posts;
    }
}
