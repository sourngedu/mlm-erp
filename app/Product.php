<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Product extends Model
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
