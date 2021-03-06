<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    public function initdata(Request $request) {


		$request_payload = array();
		$request_payload['teacher_id'] 		= Session::get('teacher_id');//"5e2eb5d36383af44fa235a72";
		$request_payload['token'] 			= Session::get('token_id');
		$request_payload['token_app_type'] 	= "tesol";
		$api = "session_list";
    	$session = \App\helper::curl_get($api,$request_payload);
 
		$sessionId = isset($_GET['id'])?$_GET['id']:$session['result'][0]['id'];
		$request_payload = array();
		$request_payload['session_id'] 		= $sessionId;
		$request_payload['token'] 			= Session::get('token_id');
		$request_payload['teacher_id'] 		= Session::get('teacher_id'); //"5f685286985a000083006922";
		$request_payload['token_app_type'] 	= "tesol";
		$api = "ppt_list";
    	$pptList = \App\helper::curl_get($api,$request_payload);
 
    	$request_payload['session_id'] 		= $sessionId;
		$request_payload['token'] 			= Session::get('token_id');
		$request_payload['teacher_id'] 		= Session::get('teacher_id');//"5f685286985a000083006922";
		$request_payload['token_app_type'] 	= "tesol";
		$request_payload['ppt_id'] 			= $pptList['result'][0]['id']; //5d00c770b0dace23ff61444a
		$api = "session-note-list";
    	$sessionNoteList = \App\helper::curl_get($api,$request_payload);

    	return response()->view('teacher.dashboard', compact('session','pptList','sessionNoteList','sessionId'));
    }
     public function profile(Request $request) {

		$request_payload['id'] 				= Session::get('teacher_id');
		$request_payload['token'] 			= Session::get('token_id');
		$request_payload['token_app_type'] 	= "tesol";
		$api = "get_tesol_profile";
    	$profileList = \App\helper::curl_get($api,$request_payload);
    	// dd($profileList);
		return response()->view('teacher.profile',compact('profileList'));
    }
    
    public function editProfile(Request $request) {
		$request_payload['id'] 				= Session::get('teacher_id');
		$request_payload['first_name'] 		= $request->first_name;
    	$request_payload['last_name'] 		= $request->last_name;
    	$request_payload['contact_number'] 	= $request->contact_number;
		$request_payload['token_app_type'] 	= "tesol";
		$request_payload['token'] 			= Session::get('token_id');
    	if($request->flag != "profile"){
			$request_payload['new_password'] 	= $request->new_password;
	    	$request_payload['old_password'] 	= $request->old_password;
    	}
		$api = $request->api;
    	$addNotes = \App\helper::curl_post($api,$request_payload);
    	
    	echo json_encode($addNotes);
    }
    public function addNote(Request $request) {

		$request_payload['teacher_id'] 		= Session::get('teacher_id');//"5f685286985a000083006922";
		$request_payload['ppt_id'] 			= $request->ppt_id; //5d00c770b0dace23ff61444a
    	$request_payload['session_id'] 		= $request->sessionId;
    	$request_payload['note_type'] 		= $request->note_type;
    	$request_payload['teacher_note'] 	= $request->note;
		$request_payload['token_app_type'] 	= "tesol";
		$request_payload['token'] 			= Session::get('token_id');
		$api = $request->api;
    	$addNotes = \App\helper::curl_post($api,$request_payload);
    	// dd($addNotes);
    	echo json_encode($addNotes);
    }
    public function checkLogin(Request $request) {
   		$postdata = http_build_query(
		    array(
		        'email' => $request->email,
		        'password' => $request->password,
		        'token_login' => true,
		        'token_app_type' => 'tesol',
		    )
		);

		$opts = array('http' =>
		    array(
		        'method'  => 'POST',
		        'header'  => 'Content-Type: application/x-www-form-urlencoded',
		        'content' => $postdata,
		    )
		);
		$context  = stream_context_create($opts);
   		$session = json_decode(file_get_contents(env('API_PREEFIX').$request->api, true, $context));
   		dd($session->result);
   		if($session->success){
   			\Session::put('token_id', $session->result->id);
   			\Session::put('name', $session->result->name);
   		}

   		echo json_encode($session);
   		// return response()->view('login.login');
    }
}
