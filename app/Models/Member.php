<?php

namespace App\Models;

use App\Models\Package;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table='member';

    // One to One : Member 1 has only one package
    // function name is singular
    public function package()
    {
    //id is field in table package, package_id is in table member
       return $this->hasOne(Package::class,'id','package_id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function count_parent()
    {
        return  $this->hasMany(Member::class,'parent_id');
    }
}
