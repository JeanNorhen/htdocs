<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
	public function itens()
    {
        return $this->hasMany('Iten');
    }
	    protected $fillable=
	    [
	    'id',
	    'numeroDoProntuario',
	    'idadeDoPaciente',
	    'nomeDoPaciente'
	    ];

}
