<?php

namespace App\Http\Controllers;

use App\Models\Webdata;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = [
            'title'=>"She's Safe",
            'webdata'=>Webdata::find(1)
        ];
        return view('welcome',$data);
    }
}
