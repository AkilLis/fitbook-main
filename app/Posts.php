<?php

namespace App;

use App\Comments;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    /*protected $fillable = [
        'user_id', 'title', 'body',
    ];*/

    public function Comments()
    {
    	return $this->hasMany(Comments::class);
    } 
}	
