<?php namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index($nama,$npm) 
    {
        echo $nama ."<br>";
        echo $npm ."<br>";
    }
    public function show()
    {
        echo"Ahmad Julio Rizki";
        echo"1817051042";
    }
}