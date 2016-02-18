<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ClientRepository;

class ClientController extends Controller
{
    /**
     * The client repository instance.
     *
     * @var ClientRepository
     */
    protected $loans;

    /**
     * Create a new controller instance. 
     *
     * @param  ClientRepository  $clients
     * @return void
     */
    public function __construct(ClientRepository $clients)
    {
        $this->middleware('auth');

        $this->clients = $clients;
    }

    /**
     * Display a list of all of clients.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index()
    {
        return view('clients.index', [
            'clients' => $this->clients->forUser()
        ]);
    }

    public function show($id){

    	return view('clients.show', [
    		'client' => Client::findOrFail($id)
    	]);
    }

    public function edit($id)
    {
       return view('clients.edit', [
    		'client' => Client::findOrFail($id)
    	]);
    }

    public function store( Request $request )
    {
    	$client = Client::findorFail($request->id);


     
    }
}
