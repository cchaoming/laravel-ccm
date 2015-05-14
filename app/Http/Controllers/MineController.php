<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Redirect;
use View;
use Validator;

class MineController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//写个查询带分页的列表
		$ulist =   User::where('id', '>', 0)->paginate(15);
		return View::make('home', ['ulist' => $ulist]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('useradd');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	    //简单验证
	    $rules = array('name' => 'required|min:5|unique:users,name','password'=>'required|confirmed|min:4'); 
		$messages = array(
        'name.min' => '用户名必须填写长度至少5字符',
		'name.unique' => '已经存在该用户名',
		'password.required' => '密码必须填写长度至少4字符',
		'password.confirmed' =>'两次输入密码不一致',
		);
		$validator = Validator::make(Input::all(), $rules,$messages);
		if ($validator->fails()){
		return Redirect::route('mine.create')->withErrors($validator);
		}
		$data = array(
		'name'=>Input::get('name'),
		'email'=>Input::get('email'),
		'password' => bcrypt(Input::get('password'))	
		);
		//dd($data);exit();
		//保存数据转向
		$u = User::create($data);
		return Redirect::route('mine.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		//$uinfo =   User::where('id', '=', $id)->firstOrFail();
		$uinfo = User::find($id);
		
		return View::make('Useredit', ['uinfo' => $uinfo])->with('method','post');
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
    $user = User::find($id);
    $user->email = Input::get('email');
    $user->name = Input::get('name');
    $user->save();
    return Redirect::route('mine.index')->with('mess','保存成功');
	}
	

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		User::destroy($id);
		return Redirect::route('mine.index');
	}
	
	



}
