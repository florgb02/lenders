<?php

namespace App\Repositories;


use App\Client;

class ClientRepository
{
    public function forUser()
    {
        return Client::all();
    }
}