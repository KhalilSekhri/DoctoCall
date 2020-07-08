<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $table = 'doctors';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $casts = [
		'specialitie_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'specialitie_id',
		'user_id'
	];

	public function specialitie()
    {
        	
    	return $this->hasOne('App\Specialitie','id');

    }

    public function user()
    {
        	
    	return $this->hasOne('App\User','id');

    }
}
