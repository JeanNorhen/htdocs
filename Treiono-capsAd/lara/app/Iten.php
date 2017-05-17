<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iten extends Model
{
     public function prontuarios()
    {
        return $this->belongsTo('Prontuario');
    }   
    protected $fillable=	
	    [	    
	    'data'
	    'anotacao',
	    'prontuario_id'
	    ];   
}
