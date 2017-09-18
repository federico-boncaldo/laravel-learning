<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
	public function comments(){
		//create a many to many relationships with Comments
		return $this->hasMany(Comment::class); //Comments::class gives a string with the path to the class
	}

	public function user(){

		return $this->belongsTo(User::class);

	}

	public function scopeFilter($query, $filters){

        if($month = $filters['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month );
        }

        if($year = $filters['year']){
            $query->whereYear('created_at', $year);
        }
	}
}
