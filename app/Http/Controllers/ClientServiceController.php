<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientServiceController extends Controller
{
    public function show(string $id)
    {
        // Считаем общую сумму (price * quantity) из pivot-таблицы client_service
        $total = DB::table('clients')
            ->selectRaw('SUM(client_service.price * client_service.quantity) as total')
            ->join('client_service', 'clients.id', '=', 'client_service.client_id')
            ->join('services', 'services.id', '=', 'client_service.service_id')
            ->where('clients.id', $id)
            ->first();

        return view('clients.show', [
            'client' => Client::with('services')->where('id', $id)->first(),
            'total' => $total
        ]);
    }
}
