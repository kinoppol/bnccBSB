<?php namespace App\Controllers;

class Setting extends BaseController
{
	public function general()
	{
        $data=array(
			'title'=>'ตั้งค่าทั่วไป',
			'content'=>view('setting/general'),
			'menu'=>view('template/adminbsb/menu'),
		);
		return view('template/adminBSB/main',$data);
	}

    public function display()
	{
        $data=array(
			'title'=>'ตั้งค่าการแสดงผล',
			'content'=>view('setting/display'),
			'menu'=>view('template/adminbsb/menu'),
		);
		return view('template/adminBSB/main',$data);
	}

	//--------------------------------------------------------------------

}
