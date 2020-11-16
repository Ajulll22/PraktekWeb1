<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('login');
	}

	//--------------------------------------------------------------------

	public function show() {
		$data['nama']='Ahmad Julio Rizki';
		$data['npm']='1817051042';
		
		echo view('mahasiswa/header');
		echo view('mahasiswa/index',$data);
		echo view('mahasiswa/footer');
	}
}
