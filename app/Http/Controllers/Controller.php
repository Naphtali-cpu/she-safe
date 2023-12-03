<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public static function validateEmail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }else{
            return true;
        }
    }

    public static function delete($folder,$file){
        File::delete(public_path("assets/images/".$folder.'/'.$file));
    }

    public static function adminheader($title){
        $data = [
            'title'=>$title,
            //'webdata'=>WebData::findOrFail(1)
        ];
        return $data;
    }
}
