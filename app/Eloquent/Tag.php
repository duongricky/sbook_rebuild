<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    protected static function boot (){
        parent::boot();

        static::deleting ( function ($tag) {
            $tag->books()->detach();
        });
    }

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
