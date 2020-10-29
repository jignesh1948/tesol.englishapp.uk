<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
   	public function index(Request $request) {   
   		
   		return response()->view('login.login');
    }

    public function checkLogin(Request $request) {

    	$request_payload = array();
		$request_payload['email']             = $request->email;
		$request_payload['password']          = $request->password;
		$request_payload['token_login']       = true;
		$request_payload['token_app_type']    = 'tesol';

		$session = \App\helper::curl_post($request->api,$request_payload);

        if($session['success']){
            if($session['result']['user'] == "Teacher"){
                Session::flush();
                Session::push('group', $session['result']['group']);
                Session::put('teacher_id', $session['result']['_id']);
                Session::put('token_id', $session['result']['token_tesol']);
                Session::put('name', $session['result']['fore_name']);
                Session::put('contact', $session['result']['contact_number']);
                Session::put('teacher_email', $session['result']['teacher_email']);
                Session::put('user_type', $session['result']['user']);
             
            }elseif($session['result']['user'] == "trainer"){

                Session::flush();
                Session::push('group', $session['result']['group']);
                Session::put('trainer_id', $session['result']['_id']);
                Session::put('token_id', $session['result']['token_tesol']);
                Session::put('name', $session['result']['fore_name']);
                Session::put('contact', $session['result']['contact_number']);
                Session::put('trainer_email', $session['result']['trainer_email']);
                Session::put('user_type', $session['result']['user']);

           	}
        }

		echo json_encode($session);
    }
    public function logout(Request $request) {

        Session::flush();
        $request_payload = array();
        $request_payload['trainer_id']      = Session::put('trainer_id');
        $request_payload['token_login']     = true;
        $request_payload['token_app_type']  = 'tesol';
        $api                                = "logout";
        $session = \App\helper::curl_post($api,$request_payload);
        echo json_encode($session);
    }
}
