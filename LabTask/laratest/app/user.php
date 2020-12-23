<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   	//protected $table = 'jobs';
	//protected $primaryKey = "id";
	public $timestamps = false;
	protected $guarded =[];

	//const CREATED_AT = "create_time";
	//const UPDATED_AT = "update_time";
}