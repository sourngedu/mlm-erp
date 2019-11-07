<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $table='package';

// Package មួយ​ត្រូវបានជ្រើស​ដោយ​ច្រើន​ Members
public function members()
{
    return $this->belongsTo(Member::class);
}


}


