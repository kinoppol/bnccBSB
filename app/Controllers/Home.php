<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		$data=array(
			'title'=>'ภาพรวม',
			'content'=>view('user/userForm'),
			'menu'=>view('template/adminbsb/menu'),
		);
		return view('template/adminbsb/main',$data);
	}
	public function adminlte()
	{
		$data=array(
			'title'=>'ภาพรวม',
			'content'=>view('user/userForm'),
		);
		return view('template/adminlte/main',$data);
	}

	//--------------------------------------------------------------------

}
