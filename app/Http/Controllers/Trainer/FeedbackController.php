<?php

namespace App\Http\Controllers\Trainer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\helper;
class FeedbackController extends Controller
{
    public function feedback(Request $request) {

    	// dd(session::get('group'));
  //   	$feedBackData = array();
		// $feedBackData['feedback_type'] 		= "trainer_training";
		// $feedBackData['token_app_type']	 	= 'tesol';
		// $feedBackData['token'] 				= Session::get('token_id');
		// $api 								= "get-feedback-question";
		// $getFeedBack = helper::curl_get($api,$feedBackData);

    	$feedBackData = array();
		$feedBackData['trainer_id'] 		= Session::get('trainer_id'); //"5f684d5a985a000083006920";
		$feedBackData['token_app_type'] 	= 'tesol';
		$feedBackData['token'] 				= Session::get('token_id');
		$api 								= "get-trainer-feedback";
		$getFeedBackTrainer = helper::curl_get($api,$feedBackData);

		$getFeedback = array();
		$getFeedback['user_id'] 			= Session::get('trainer_id');
		$getFeedback['token_app_type'] 		= 'tesol';
		$getFeedback['token'] 				= Session::get('token_id');
		$getFeedback['group_id'] 			= session::get('group')[0][0]['_id'];
		$getFeedback['feedback_type'] 		= "trainer_training";

		$api 								= "get-feedback";
		$getQueWithAns = helper::curl_get($api,$getFeedback);
		// dd($getQueWithAns);
		return response()->view('trainer.feedback',compact('getFeedBackTrainer','getQueWithAns'));
    }
    public function addFeedback(Request $request) {

    	$data = json_decode($request->getContent(), true);
    	$feedBackData = array();
    	$feedBackData['trainer_id'] 		= Session::get('trainer_id');
		$feedBackData['group_id'] 			= session::get('group')[0][0]['_id'];
		$feedBackData['feedback_answer']	= $data;
		$feedBackData['token_app_type'] 	= 'tesol';
		$feedBackData['token'] 				= Session::get('token_id');
		$api 								= "add-feedback";
		$getFeedBack = helper::curl_post($api,$feedBackData);
		echo json_encode($getFeedBack);

    }

}
