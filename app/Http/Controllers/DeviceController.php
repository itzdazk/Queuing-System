<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Service;

class DeviceController extends Controller
{

    public function index()
    {
        $devices = Device::all();

        return view('devices.index', compact('devices'));
    }


    public function create()
    {
        $services = Service::all();

        return view('devices.create', compact('services'));
    }

    public function store(Request $request)
    {
        $selectedServiceValue = $request->input('selectedValue');

        $selectedServiceArray = explode(",", substr($selectedServiceValue, 1, strlen($selectedServiceValue)));

        $selectedServiceIdArray = [];

        for ($i = 0; $i < count($selectedServiceArray); $i++) {
            $service = Service::where('service_name', $selectedServiceArray[$i])->first();
            if ($service) {
                $serviceId = $service->id;
                $selectedServiceIdArray[$i] = $serviceId;
            }
        }
        var_dump($selectedServiceIdArray);
        $validatedData = $request->validate([
            'device_code' => 'required',
            'device_type' => 'required',
            'device_name' => 'required',
            'username' => 'required',
            'ip_address' => 'required',
            'password' => 'required',
            'active' => '1',
            'connect' => '1',
        ]);

        $device = new Device();
        $device->device_code = $validatedData['device_code'];
        $device->device_type = $validatedData['device_type'];
        $device->device_name = $validatedData['device_name'];
        $device->username = $validatedData['username'];
        $device->ip_address = $validatedData['ip_address'];
        $device->password = $validatedData['password'];
        $device->save();

        $device->services()->attach($selectedServiceIdArray);

        return redirect()->route('devices.index')->with('success', 'Device created successfully.');
    }

    public function detail(Device $device)
    {
        return view('devices.detail', compact('device'));
    }
}
