<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
      protected $fillable = [
   			'title',
            'body'
        ];
}
