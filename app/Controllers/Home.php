<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
                'title' => 'Template',
                'welcome' => 'Bienvenido',
                'navbrand' => 'Template'
        ];
		echo view('welcome_message');
//		echo view('templates/header',$data);
//		echo view('templates/navbar',$data);
//		echo view('templates/carousel');
//		echo view('templates/cards');
//		echo view('templates/contact');
//		echo view('templates/footer');
	}
}