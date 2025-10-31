<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Log;
use Exception;

class ServiceControllerApi extends Controller
{

    public function index(Request $request)
    {
        return response(Service::limit($request->perpage ?? 5)
        ->offset(($request->perpage ?? 5) * ($request->page ?? 0))
        ->get());
    }

    public function total()
    {
        return response(Service::all()->count());
    }


    public function store(Request $request)
    {
        if (! Gate::allows('create-service')) {
            return response()->json([
                'code' =>  1,
                'message' => 'У вас не прав на добавление услуги'
            ]);
        }
        $validated = $request->validate([
            'name' => 'required|max:255|unique:services,name',
            'price' => 'required|numeric|min:0',
            'cosmetologist_id' => 'required|numeric',
            'image'=>'required|file',
        ]);
        $file = $request->file('image');

        $fileName = rand(1, 10000) . '.' . $file->getClientOriginalName();

        try {
            $path = Storage::disk('s3')->putFileAs('service_pictures', $file, $fileName);
            $fileUrl = Storage::disk('s3')->url($path);
        }
        catch (\Exception $e) {
            return response()->json([
                'code' =>  2,
                'message' => 'Ошибка загрузки файла в хранилище S3',
                'error' => $e->getMessage(),
            ]);
        };
        $service = new Service($validated);
        $service->picture_url = $fileUrl;
        $service->save();
        return response()->json([
            'code' =>  0,
            'message' => 'Услуга успешно добавлена',
        ]);

    }


    public function show(string $id)
    {
        return response(Service::find($id));
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
