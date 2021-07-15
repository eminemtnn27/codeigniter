<?php

namespace App\Controllers\Back;
use App\Controllers\BaseController;
class Admin extends BaseController
{
	
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
	public function logout()
	{
		 
	}
}
