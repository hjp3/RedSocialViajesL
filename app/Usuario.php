<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Illuminate\Database\Eloquent\SoftDeletes;   //incluimos librería softdelete

class Usuario extends Model
{
	//use SoftDeletes;
	
    protected $fillable = [
    	"nombre_completo",
    	"usuario",
    	"email",
    	"password"
    ];

    protected $defaults = array(       // atributo por default
		'avatar' => "avatar.img"
    );

	public function __construct(array $attributes = array())
	{
	    $this->setRawAttributes($this->defaults, true);
	    parent::__construct($attributes);
	}

	//protected $dates = ['deleted_at'];     // sobreescribirmos propiedad date para softdelete


	public function galeriaUsuario(){
		return $this->hasOne('App\GaleriaUsuario');
	}
}
