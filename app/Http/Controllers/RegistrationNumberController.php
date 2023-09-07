<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration_number;
use App\Models\Service;

class RegistrationNumberController extends Controller
{
    public function index()
    {
        $regisnumbers = Registration_number::all();

        return view('regisnumber.index', compact('regisnumbers'));
    }

    public function create()
    {


        $services = Service::all();
        return view('regisnumber.create', compact('services'));
    }

    public function store(Request $request)
    {
        // Kiểm tra và xử lý dữ liệu đăng ký mới
        $this->validate($request, [
            'full_name' => 'required',
            'service_id' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
        ]);

        $lastRegistration = Registration_number::latest('order_number')->first();

        $orderNumber = $lastRegistration ? $lastRegistration->order_number + 1 : 2010001;

        $regisnumberFind = Registration_number::create([

            'full_name' => $request->input('full_name'),
            'service_id' => $request->input('service_id'),
            'order_number' => $orderNumber,
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
        ]);
        $regisnumber = Registration_number::where('email', $regisnumberFind->email)->first();
        return view('regisnumber.detail', compact('regisnumber'));
    }

    public function detail(Registration_number $regisnumber)
    {
        return view('regisnumber.detail', compact('regisnumber'));
    }

    public function report()
    {
        $regisnumbers = Registration_number::all();

        return view('report.index', compact('regisnumbers'));
    }
}
