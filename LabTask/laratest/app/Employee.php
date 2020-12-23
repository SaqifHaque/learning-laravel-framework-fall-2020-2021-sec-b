<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   	//protected $table = 'employees';
	protected $primaryKey = "e_Id";
	public $timestamps = false;

	//const CREATED_AT = "create_time";
	//const UPDATED_AT = "update_time";
}