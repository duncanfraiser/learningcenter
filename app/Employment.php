<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employment extends Model
{
	    	use SoftDeletes;
      		protected $fillable = [
      		'date',
      		'name',
            'address',
            'religion',
            'sex',
            'age',
            'dob',
            'phone',
            'social',
            'marital-status',
            'dependents',
            'position',
            'salary',
            'available',
            'available',
            'days-hours',
      		'sname',
      		'employed',
      		'saddress',
            'sphone',
            'emergency-name',
            'emergency-phone',
            'elementary',
            'highschool',
            'college',
            'specialization',
            '1from',
            '1to',
            '1position',
            '1employer',
            '1address',
            '1phone',
            '1salary',
            '1leaving',
            '2from',
            '2to',
            '2position',
            '2employer',
            '2address',
            '2phone',
            '2salary',
            '2leaving',
            'volunteer',
            'talents',
            '1ref',
            '1refaddress',
            '1refphone',
            '2ref',
            '2refaddress',
            '2refphone',
            '3ref',
            '3refaddress',
            '3refphone',
            'why'
        ];
}
