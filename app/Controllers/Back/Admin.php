<?php

namespace App\Controllers\Back;
use App\Controllers\BaseController;
use App\Libraries\Hash;
class Admin extends BaseController
{
	public function _construct(){
		$this->load->helper('url');
	//	helper(['url','form','auth']);
	}
	public function index()
	{
		return view('back/homepage');
	}
	public function login()
	{
		return view('back/login');
	}
	public function loginCheck()
	{
		helper(['url','form','html']);
		$validation=$this->validate([
			'email'=>[
				'rules'=>'required|valid_email|is_not_unique[users.email]',
			'errors' => [
                    'required' => 'Email Adresi girilmelidir.',
					'valid_email'=>'Geçerli Bir Email adresi Giriniz.',
					'is_unique'=>'Bu Email Adresi Zaten Alınmış'
			]
			],
			'password'=>[
				'rules'=>'required|min_length[5]|max_length[12]',
			'errors' => [
                    'required' => 'Şifre girilmelidir.',
					'min_length'=>'Şifre En Az Beş Karakterden Oluşmalıdır.',
					'max_length'=>'Şifre En Fazla 12 Karakterden Oluşmalıdır.'
			]
			] 		   
		]);
		if(!$validation){
			return view('back/login',['validation'=>$this->validator]);
		}else{ 
			$email=$this->request->getPost('email');
			$password=$this->request->getPost('password'); 
			$users=new \App\Models\Users();
			$user_info=$users->where('email',$email)->first();
			$checked=Hash::check($password,$user_info['password']);
			if(!$checked){
				session()->setFlashdata('fail','Girilen Şifre Yanlış');
				return redirect()->back()->withInput();
			}else{
				$id=$user_info['id'];
				session()->set('hello',$id);
				return redirect()->to('admin/homepage');
			}
		}

	}
	public function register()
	{
		 return view('back/register');
	}
	public function registerSave()
	{
		helper(['url','form','html']);
		$validation=$this->validate([
			'name'=>[
				'rules'=>'required',
			'errors' => [
                    'required' => 'Bir Kullanıcı Adı Girilmelidir.'
			]
			],
			'email'=>[
				'rules'=>'required|valid_email|is_unique[users.email]',
			'errors' => [
                    'required' => 'Email Adresi girilmelidir.',
					'valid_email'=>'Geçerli Bir Email adresi Giriniz.',
					'is_unique'=>'Bu Email Adresi Zaten Alınmış'
			]
			],
			'password'=>[
				'rules'=>'required|min_length[5]|max_length[12]',
			'errors' => [
                    'required' => 'Şifre girilmelidir.',
					'min_length'=>'Şifre En Az Beş Karakterden Oluşmalıdır.',
					'max_length'=>'Şifre En Fazla 12 Karakterden Oluşmalıdır.'
			]
			],
			'confirmpassword'=>[
				'rules'=>'required|min_length[5]|max_length[12]|matches[password]',
			'errors' => [
                    'required' => 'Şifre Tekrar girilmelidir.',
					'min_length'=>'Şifre En Az Beş Karakterden Oluşmalıdır.',
					'max_length'=>'Şifre En Fazla 12 Karakterden Oluşmalıdır.',
					'matches'=>'Şifre Eşleşmiyor.'
			]
			]			   
		]);
		if(!$validation){
			return view('back/register',['validation'=>$this->validator]);
		}else{
			$name=$this->request->getPost('name');
			$email=$this->request->getPost('email');
			$password=$this->request->getPost('password'); 
			$values=[
				'name'=>$name,
				'email'=>$email,
				'password'=>Hash::make($password)
			];
			$users=new \App\Models\Users();
			$query=$users->insert($values);
			if($query){
				return redirect()->to('back/admin/register')->with('success','Üyelik Kaydınız Başarıyla Oluşturuldu.');
			}else{
				return redirect()->back()->withInput()->with('fail','Bir şeyler yanlış gitti...');

			}
		}
	}
	public function logout()
	{
		 
	}
}
