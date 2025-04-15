<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.index', [
            'clients' => Client::all()
        ]);
    }

    public function show(string $id)
    {
        return view('clients.show', [
            'client' => Client::all()->where('id', $id)->first()
        ]);
    }
}
