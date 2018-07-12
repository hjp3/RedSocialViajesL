<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
	use SoftDeletes;
	
    protected $fillable = [
    	"nombre_completo",
    	"usuario",
    	"email",
    	"password"
    ];

    protected $defaults = array(
		'avatar' => "avatar.img"
    );

	public function __construct(array $attributes = array())
	{
	    $this->setRawAttributes($this->defaults, true);
	    parent::__construct($attributes);
	}

	protected $dates = ['deleted_at'];
}
