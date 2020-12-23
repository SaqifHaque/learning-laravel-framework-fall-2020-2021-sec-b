<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   	//protected $table = 'jobs';
	protected $primaryKey = "j_Id";
	public $timestamps = false;

	//const CREATED_AT = "create_time";
	//const UPDATED_AT = "update_time";
}