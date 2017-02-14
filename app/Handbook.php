<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Handbook extends Model
{
	    	use SoftDeletes;
      		protected $fillable = [
   			'title',
            'handbook'
        ];
}
