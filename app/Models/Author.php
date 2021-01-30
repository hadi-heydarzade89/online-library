<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name','surname','description'];

    public function books()
    {
        return $this->belongsToMany(Book::class,'author_books');
    }


}
