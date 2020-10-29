<?php

namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use App\helper;
class FeedbackController extends Controller
{
    
    public function feedback(Request $request) {

    	$feedBackData = array();
		$feedBackData['trainer_id'] 		= Session::get('teacher_id'); //"5f684d5a985a000083006920";
		$feedBackData['token_app_type'] 	= 'tesol';
		$feedBackData['token'] 				= Session::get('token_id');
		$api 								= "get-trainer-feedback";
		$getFeedBackTrainer = helper::curl_get($api,$feedBackData);

		$getFeedback = array();
		$getFeedback['user_id'] 			= Session::get('teacher_id');
		$getFeedback['token_app_type'] 		= 'tesol';
		$getFeedback['token'] 				= Session::get('token_id');
		$getFeedback['group_id'] 			= session::get('group')[0][0]['_id'];
		$getFeedback['feedback_type'] 		= "trainer_training";

		$api 								= "get-feedback";
		$getQueWithAns = helper::curl_get($api,$getFeedback);
		
		return response()->view('teacher.feedback',compact('getFeedBackTrainer','getQueWithAns'));
    }
    public function addFeedback(Request $request) {
    	$data = json_decode($request->getContent(), true);
    	$feedBackData = array();
    	$feedBackData['trainer_id'] 		= Session::get('teacher_id');
		$feedBackData['group_id'] 			= session::get('group')[0][0]['_id'];
		$feedBackData['feedback_answer']	= $data;
		$feedBackData['token_app_type'] 	= 'tesol';
		$feedBackData['token'] 				= Session::get('token_id');
		$api = "add-feedback";
		$getFeedBack = helper::curl_post($api,$feedBackData);
		echo json_encode($getFeedBack);
    }
}
