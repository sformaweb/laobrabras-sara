<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //add
    public function getCountries()
    {
        $countries = DB::table('countries')->pluck("name","id");
        return view('dropdown',compact('countries'));
    }
}
