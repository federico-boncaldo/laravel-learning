<?php

namespace App;

class Comment extends Model
{
	//important to define when we send data from a post request
	protected $fillable = ['post_id', 'body']; //accept only these two fields

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
