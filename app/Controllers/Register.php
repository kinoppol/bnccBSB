<?php namespace App\Controllers;

class Register extends BaseController
{
	public function index()
	{
		return view('register/form');
	}

    public function save()
	{
		return view('register/save');
	}

	//--------------------------------------------------------------------

}
