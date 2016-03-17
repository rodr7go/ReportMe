<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

    protected $fillable = [ 'subject', 'description', 'user_id', 'admin_id', 'status', 'answer', 'image1', 'image2', 'image3' ];

    public function user (){
    	return $this->belongsTo('\App\User');
    }

    public function admin ()
    {
    	return $this->belongsTo('\App\User');
    }
}