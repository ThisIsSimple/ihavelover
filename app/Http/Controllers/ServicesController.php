<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services/index');
    }

    public function manage()
    {
        $manage = App\Manage::get();

        return view('services/manage', [
            'manage' => $manage
        ]);
    }

    public function food()
    {
        if(isset($_POST['ingredients'])) {
            $ingredients = Input::post('ingredients');
            $ingredients = trim($ingredients);

            $response = \Unirest\Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/findByIngredients?fillIngredients=true&ingredients=$ingredients&limitLicense=false&number=10&ranking=1",
                array(
                    "X-Mashape-Key" => "W9Sla1Sko0mshYdtZxfbu6LfoQXhp1QzPAYjsn1WimNXaqDOYg",
                    "Accept" => "application/json"
                )
            );

            return view('services/food', [
                'recipes' => $response->body
            ]);
        } else {
            return view('services/food');
        }
    }


    public function manageInput()
    {
        $temperature = Input::get('temp');
        $humidity = Input::get('humi');
        $gas = Input::get('gas');

        $data = [
            'temperature' => $temperature,
            'humidity' => $humidity,
            'gas' => $gas
        ];

        if(App\Manage::create($data)) {
            $json['status'] = 'success';
            $json['content'] = $data;
        } else {
            $json['status'] = 'fail';
        }

        return json_encode($json);
    }

    public function manageOutput()
    {
        $count = Input::get('n');
        $data = App\Manage::get()->reverse();

        $json = [];

        $i=0;
        foreach($data as $item) {
            $i++;
            $created_at = $item->created_at;
            $temperature = $item->temperature;
            $humidity = $item->humidity;
            $gas = $item->gas;

            $content = [
                'id' => $item->id,
                'created_at' => $created_at,
                'temp' => $temperature,
                'humi' => $humidity,
                'gas' => $gas
            ];

            array_push($json, $content);

            if($i == $count) break;
        }

        return json_encode($json);
    }
}
