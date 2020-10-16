<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

	public function show() {
		$nama['title']='Ajulll';
		echo view('mahasiswa/index', $nama);
		echo view('mahasiswa/header', $nama);
		echo view('mahasiswa/footer', $nama);
		$nama['title']='1817051042';
		echo view('mahasiswa/index', $nama);
		echo view('mahasiswa/header', $nama);
		echo view('mahasiswa/footer', $nama);
	}
}
