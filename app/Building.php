<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
	protected $table = 'buildings';

	protected $fillable = ['name', 'street', 'number', 'neighborhood', 'city', 'state', 'zip_code'];   

	public function users (){
		return $this->belongsToMany('\App\User');
	}
}
