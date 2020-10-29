<?php

namespace App;

class helper {
	
	public static function curl_get($endPoint, $requestParams){
		// dd(env('API_PREEFIX').$endPoint.'?'.http_build_query($requestParams));
		ini_set('memory_limit','1024M');
		set_time_limit(0);
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => env('API_PREEFIX').$endPoint.'?'.http_build_query($requestParams),
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_CUSTOMREQUEST => "GET",
		));

		$response = curl_exec($curl);
		curl_close($curl);
		$response = json_decode($response,true);
		if(isset($response['invalid_token'])){
			Session::flush();
			redirect('/');
		}
		return $response;
	}

	public static function curl_post($endPoint, $requestParams){
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => env('API_PREEFIX').$endPoint,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_HTTPHEADER=> array('Content-Type:application/json'),
			CURLOPT_POSTFIELDS => json_encode($requestParams),
		));
		$response = curl_exec($curl);
		
		curl_close($curl);
		$response = json_decode($response,true);
		if(isset($response['invalid_token'])){
			Session::flush();
			redirect('/');
		}
		return $response;
	}
}
