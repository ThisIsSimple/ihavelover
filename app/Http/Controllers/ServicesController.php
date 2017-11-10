<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services/index');
    }

    public function manage()
    {
        return view('services/manage');
    }

    public function food()
    {
        return view('services/food');
    }


    public function manageInput()
    {
        $temperature = $_GET['temp'];
        $humidity = $_GET['humi'];
        $gas = $_GET['gas'];

        $data = [
            'temperature' => $temperature,
            'humidity' => $humidity,
            'gas' => $gas
        ];

        if(\App\Manage::create($data)) {
            $json['status'] = 'success';
            $json['content'] = $data;
        } else {
            $json['status'] = 'fail';
        }

        return json_encode($json);
    }
}
