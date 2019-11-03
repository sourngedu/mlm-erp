<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends Model
{
	use LogsActivity;
	protected $fillable = [
			'name', 'detail'
	];

	public function getDescriptionForEvent($eventName)
	{
		return __CLASS__ . " model has been {$eventName}";
	}   	
}
