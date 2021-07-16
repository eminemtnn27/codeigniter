<?php

namespace App\Controllers\Back;
use App\Controllers\BaseController;
class Admin extends BaseController
{
	public function _construct(){
		helper(['url','form']);
	}
	public function index()
	{
		return view('back/homepage');
	}
	public function login()
	{
		return view('back/login');
	}
	public function register()
	{
		 return view('back/register');
	}
	public function registerSave()
	{
		$validation=$this->validate([
			'name'=>'required',
			'email'=>'required|valid_email|is_unique[users.email]',
			'password'=>'required|min_length[5]|max_length[12]',
			'confirmpassword'=>'required|min_length[5]|max_length[12]|matches[password]',
			''
		]);
		if(!$validation){
			return view('back/register',['validation'=>$this->validator]);
		}else{
			echo "kayıt başarılı";
		}
	}
	public function logout()
	{
		 
	}
}
