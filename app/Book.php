<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

	protected $fillable = [
		'book_name', 'description', 'author_name', 'publishing_name',
		'book_genre', 'release_date', 'status', 'category',
	];

    public function user()
    {
    	return $this->belongsTo(\App\User::class);
    }
}
