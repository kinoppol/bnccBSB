<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		$userModel = model('userModel');
		$userdata = $userModel->getUsers(['id'=>1]);
		print_r($userdata);
		return view('profile/prawit');
	}
	public function listUser()
	{
		$userModel = model('userModel');
		$userdata = $userModel->listUsers();
		//print_r($userdata);
		$data=array(
			'userdata'=>$userdata,
		);
		return view('user/list',$data);
	}
	public function addUser(){
		
		$password=trim($_POST['password']);
		$confirmPassword=trim($_POST['confirmPassword']);
		if($password!=$confirmPassword){
			return 'รหัสผ่านไม่ตรงกัน';
			exit();
		}

		$data=array(
			'username'=>$_POST['username'],
			'password'=>$password,
			'name'=>$_POST['name'],
			'surname'=>$_POST['surname'],
			'email'=>$_POST['email']
		);

		$userModel = model('userModel');
		$useradd = $userModel->addUser($data);
		if($useradd){
			print "เพิ่มผู้ใช้สำเร็จ";
		}else{
			print "ไม่สามารถเพิ่มผู้ใช้ได้";
		}
	}
	public function registerUser(){
		return view('user/userForm');
	}
	public function deleteUser($id)
	{
		$userModel = model('userModel');
		$userDelete = $userModel->deleteUser(['id'=>$id]);
		if($userDelete){
			return 'ลบผู้ใช้สำเร็จ';
		}else{
			return 'ไม่สามารถลบผู้ใช้ได้';
		}
	}
	public function editUser($id)
	{
		$userModel = model('userModel');
		$userdata = $userModel->getUsers(['id'=>$id]);
		return view('user/userForm',['userdata'=>$userdata]);
	}
	public function saveUser($id)
	{
		$data=array(
			'username'=>$_POST['username'],
			'name'=>$_POST['name'],
			'surname'=>$_POST['surname'],
			'email'=>$_POST['email'],
		);

		$password=trim($_POST['password']);
		$confirmPassword=trim($_POST['confirmPassword']);
		if($password!=$confirmPassword){
			return 'รหัสผ่านไม่ตรงกัน';
		}
		
		if($password!=''){
			$data['password']=$password;
		}

		$userModel = model('userModel');
		$userUpdate = $userModel->updateUser($id,$data);
		if($userUpdate){
			return 'แก้ไขข้อมูลผู้ใช้สำเร็จ';
		}else{
			return 'ไม่สามารถแก้ไขข้อมูลผู้ใช้ได้';
		}
	}
}