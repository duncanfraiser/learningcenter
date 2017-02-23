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
            'marital_status',
            'dependents',
            'position',
            'salary',
            'available',
            'days_hours',
      	'sname',
      	'employed',
      	'saddress',
            'sphone',
            'emergency_name',
            'emergency_phone',
            'elementary',
            'highschool',
            'college',
            'specialization',
            'onefrom',
            'oneto',
            'oneposition',
            'oneemployer',
            'oneaddress',
            'onephone',
            'onesalary',
            'oneleaving',
            'twofrom',
            'twoto',
            'twoposition',
            'twoemployer',
            'twoaddress',
            'twophone',
            'twosalary',
            'twoleaving',
            'volunteer',
            'talents',
            'oneref',
            'onerefaddress',
            'onerefphone',
            'tworef',
            'tworefaddress',
            'tworefphone',
            'threeref',
            'threerefaddress',
            'threerefphone',
            'why'
        ];
}
