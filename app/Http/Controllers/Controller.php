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

    public static function validatePhone($phone){
        if(strpos($phone, '0')===0 && strlen($phone)==10){
            $nphone = "+254".substr($phone,1);
        }elseif (strpos($phone, '+')===0 && strlen($phone)==13) {
            $nphone = $phone;
        }elseif (strpos($phone, '2')===0 && strlen($phone)==12) {
            $nphone = "+".$phone;

        } else {
            $nphone = false;
        }
        return $nphone;
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
