<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cosmetologist;
use Illuminate\Support\Facades\DB;

class CosmetologistServiceController extends Controller
{
    public function show(string $id)
    {
        $total = DB::table('cosmetologist_service')
            ->selectRaw('SUM(price) as total')
            ->where('cosmetologist_id', $id)
            ->first();

        return view('cosmetologist_services.show', [
            'cosmetologist' => Cosmetologist::with('services')->find($id),
            'total' => $total
        ]);
    }
}
