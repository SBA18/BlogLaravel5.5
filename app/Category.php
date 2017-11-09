<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;

class Category extends Model
{

	public function User()
	{
		return $this->belongsTo(User::class);
	}

	public function posts()
	{
		return $this->hasMany(Post::class);
	}

}
