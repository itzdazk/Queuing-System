<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Registration_number;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();

        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'service_code' => 'required',
            'service_name' => 'required',
            'description' => 'required',
            'active' => '1',
        ]);

        Service::create($validatedData);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function detail(Service $service)
    {
        $regisnumbers = Registration_number::where('service_id', $service->id)->get();

        return view('services.detail', compact('service', 'regisnumbers'));
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }



    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'service_code' => 'required',
            'service_name' => 'required',
            'description' => 'nullable',
        ]);

        $service->update($validatedData);

        return redirect()->route('services.index', $service)->with('success', 'Service updated successfully.');
    }
}
