<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['book_id', 'user_id', 'from', 'to'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
