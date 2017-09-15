<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	//A query scope is a wrapper around a particular query
    public function scopeIncomplete($query) //Task::incomplete()
    {
    	return $query->where('completed', 0);
    }
}
