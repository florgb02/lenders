<?php

namespace App;

use App\Client;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    /*
	* Mass Assinged attributes
	*/
	protected $fillable = array('user_id', 'amount', 'interest', 'date_start', 'years');

	public function __construct()
    {

    }
    /**
     * Define the relationship between the clients and the loan.
     * Each Loan Belongs to one client.
    */
    public function client(){

    	return $this->belongsTo(Client::class);

    }
}
