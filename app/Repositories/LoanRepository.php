<?php

namespace App\Repositories;

use App\User;
use App\Client;

class LoanRepository
{
    public function forClient(Client $client)
    {
        return Task::where('user_id', $user->client)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}