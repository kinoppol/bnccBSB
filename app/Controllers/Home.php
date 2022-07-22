<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data=array(
			'title'=>'ภาพรวม',
			'content'=>view('user/userForm'),
		);
		return view('template/adminbsb/main',$data);
	}

	//--------------------------------------------------------------------

}
