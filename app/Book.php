<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

	protected $fillable = [
		'book_name', 'description', 'author_name', 'publishing_name', 'book_image',
		'book_genre', 'release_date', 'category',
	];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function rent()
    {
        return $this->belongsTo(\App\Rent::class);
    }

}
