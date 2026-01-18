<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use PhpParser\Node\Expr\Array_;

class Post extends Model
{   
  use HasFactory;
  protected $fillable = [
    'title',
    'slug',
    'author',
    'body'
    ];


    protected $with = ['Author','Category']; //mematikan lazy loading

    public function Author() : BelongsTo {
        return $this->belongsTo(User::class);
    }

     public function Category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }


    public function scopeFilter(Builder $query, array $filters) : void {
    $query->when($filters['keyword'] ?? false, function($query, $keyword) {
        return $query->where('title', 'like', '%' . $keyword . '%');
    });

     $query->when($filters['category'] ?? false, function($query, $category) {
        return $query->whereHas('category',function(Builder $query) use($category){
            $query->where('slug',$category);
        });
    });

    $query->when($filters['author'] ?? false, function($query, $author) {
        return $query->whereHas('author',function(Builder $query) use($author){
            $query->where('username',$author);
        });
    });
    }
}
