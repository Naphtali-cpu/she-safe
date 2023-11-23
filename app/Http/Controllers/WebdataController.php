<?php

namespace App\Http\Controllers;

use App\Models\Webdata;
use Illuminate\Http\Request;

class WebdataController extends Controller
{
    public function index(){
        $webdata = Webdata::find(1);
        $data = [
            'title'=>'Webdata',
            'webdata'=>$webdata
        ];

        return view('admin.webdata',$data);
    }

    public function store(Request $request){
        $web = Webdata::find(1);
        if($web == null){
            $web = new Webdata();
            $web->description = $request->description;
            $web->about = $request->about;
            $web->choice = $request->choose;
            $web->email = $request->email;
            $web->phone = $request->phone;
            $web->address = $request->address;
            $web->save();
        }else{
            $web->description = $request->description;
            $web->about = $request->about;
            $web->choice = $request->choose;
            $web->email = $request->email;
            $web->phone = $request->phone;
            $web->address = $request->address;
            $web->update();
        }

        return redirect()->back()->with('success',"Data Saved Successfully");
    }
}
