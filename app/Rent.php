<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{

    protected $fillable = [
        'status'
    ];

    public function book()
    {
    	return $this->hasOne(\App\Book::class);
    }

    public function user()
    {
        return $this->hasOne(\App\User::class);
    }
}
