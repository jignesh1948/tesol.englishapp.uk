<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\helper;
class WorkRecordController extends Controller
{
    
    
    public function workRecord() {
  		// $feedBackData = array();
		// $feedBackData['feedback_type'] = "trainer_training";
		// $feedBackData['token_app_type'] = 'tesol';
		// $feedBackData['token'] = Session::get('token_id');
		// $api = "get-feedback-question";
		// $getFeedBack = helper::curl_get($api,$feedBackData);
		return response()->view('teacher.workrecord');
    }
}
