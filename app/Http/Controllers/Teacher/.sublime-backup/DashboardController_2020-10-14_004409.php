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
    	// dd($session);
		$sessionId = isset($_GET['id'])?$_GET['id']:$session['result'][0]['id'];
		$request_payload = array();
		$request_payload['session_id'] 		= $sessionId;
		$request_payload['token'] 			= Session::get('token_id');
		$request_payload['teacher_id'] 		= Session::get('teacher_id'); //"5f685286985a000083006922";
		$request_payload['token_app_type'] 	= "tesol";
		$api = "ppt_list";
    	$pptList = \App\helper::curl_get($api,$request_payload);
    	// dd($pptList);

    	$request_payload['session_id'] 		= $sessionId;
		$request_payload['token'] 			= Session::get('token_id');
		$request_payload['teacher_id'] 		= Session::get('teacher_id');//"5f685286985a000083006922";
		$request_payload['token_app_type'] 	= "tesol";
		$request_payload['ppt_id'] 			= $pptList['result'][0]['id']; //5d00c770b0dace23ff61444a
		$api = "session-note-list";
    	$sessionNoteList = \App\helper::curl_get($api,$request_payload);
    	// dd($sessionNoteList);
    	return response()->view('teacher.dashboard', compact('session','pptList','sessionNoteList','sessionId'));
    }
}
