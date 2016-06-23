<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //
    protected $primaryKey = 'id';
	protected $table = 'club';

	public function followers()
	{
		return $this->belongsToMany('App\User', 'club_followers', 'club_id', 'user_id');
	}

	public function requests()
	{
		return $this->belongsToMany('App\User', 'club_requests', 'club_id', 'user_id');
	}

	public function members()
	{
		
	}

	public function widgets()
	{
		return $this->belongsToMany('App\Widget', 'club_widgets', 'user_id', 'widgets_id');
	}
}
