<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = Controller::adminheader('Dashboard');
        return view('admin.index',$data);
    }
}
