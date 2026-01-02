<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Mail\ContactUs;


class MessageController extends Controller
{
    public function menssage(Request $request)
    {
        if(config('services.hcaptcha.enable')){
            $secret = config('services.hcaptcha.secret');
            $response = file_get_contents(
                "https://api.hcaptcha.com/siteverify?secret=".$secret."&response=".$request->response
            );
            $recaptacha = json_decode($response,true);
            $is_human = $recaptacha['success'];
        }else{
            $is_human = true;
        }

        if($is_human == true){
            $correo = new ContactUs($request);
            try {
                Mail::to('customer@breadinthebox.com')->send($correo);
                return response()->json(['status' => true, 'msg' => "Your message was sent successfully"]);
            } catch (\Exception $e) {
                return response()->json(['status' => false, 'msg' => "An error occurred!!, try again later"]);
            }
        }else{
            return response()->json(['status' => true, 'msg' => "hCaptcha verification has failed"]);
        }
    }
}
