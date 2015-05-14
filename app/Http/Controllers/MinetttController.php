<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class MineController extends Controller {
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	 
	 public function __construct()
	{
	header("Content-type: text/html; charset=utf-8");		
	}
	
	
	public function getIndex()
	{
		echo 'fff';
	}
	
	public function getTest(){
	   echo '我是test';
	}
	
	function resourcetest(){
	echo 'test333333';
	}

}