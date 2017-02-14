<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
      protected $fillable = [
   			'title',
            'body'
        ];
}
