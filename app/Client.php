<?php

namespace App;

use App\Loan;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

	/*
	* Mass Assinged attributes
	*/
	protected $fillable = array('name', 'address', 'phone_number');

	
    /**
     * Define the relationship between the clients and the loan ( One client -> many loans) for the user.
    */
    public function loan(){

    	return $this->hasMany(Loan::class);

    }
}
