<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialitie extends Model
{
    protected $table = 'specialities';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
