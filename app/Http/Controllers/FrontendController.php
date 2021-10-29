<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $lat = 26.754347; //latitude
        $lng = 81.001640; //longitude
        $address = $this->getaddress($lat, $lng);
        dd($address);

        return view('frontend.pages.index');
    }

    public function getaddress($lat, $lng)
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim($lat) . ',' . trim($lng) . '&sensor=true';
        $json = @file_get_contents($url);
        $data = json_decode($json);
        dd($data);
        $status = $data->status;
        if ($status == "OK") {
            return $data->results[0]->formatted_address;
        } else {
            return false;
        }
    }
}
