<?php namespace App\Controllers;

class Unidadesaude extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('cadastros/unidadesaude');
		echo view('templates/footer');
	}
}