<?php

namespace App;

class Post extends Model
{
	public function comments(){
		//create a many to many relationships with Comments
		return $this->hasMany(Comment::class); //Comments::class gives a string with the path to the class
	}

	public function user(){

		return $this->belongsTo(User::class);
		 
	}
}
