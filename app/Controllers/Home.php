<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('header');
		//echo view('listado_estudiante');
		//echo view('dashboard')
		echo view('footer');
	}
}
