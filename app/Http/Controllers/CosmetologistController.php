<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cosmetologist;
use Illuminate\Http\Request;

class CosmetologistController extends Controller
{
    public function index()
    {
        return view('cosmetologists.index', [
        'cosmetologists' => Cosmetologist::all()
    ]);
    }

    public function show(string $id)
    {
        return view('cosmetologists.show', [
            'cosmetologist' => Cosmetologist::all()->where('id', $id)->first()
        ]);
    }

}
