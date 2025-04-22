<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cosmetologist;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('services.index', [
            'services' => Service::paginate($perpage)->withQueryString()
        ]);

    }

    public function create()
    {
        return view('services.create', [
            'cosmetologists' => Cosmetologist::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'cosmetologist_id' => 'required|exists:cosmetologists,id'
        ]);
        $service = new Service($validated);
        $service->save();
        return redirect('/services');
    }

    public function edit(string $id)
    {
        return view('services.edit', [
            'service' => Service::all()->where('id', $id)->first(),
            'cosmetologists' => Cosmetologist::all()

        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'cosmetologist_id' => 'integer',
        ]);
        $service = Service::all()->where('id', $id)->first();
        $service->name = $validated['name'];
        $service->price = $validated['price'];
        $service->cosmetologist_id = $validated['cosmetologist_id'];
        $service->save();
        return redirect('/services');
    }

    public function destroy(string $id)
    {
        Service::destroy($id);
        return redirect('/services');
    }

}
