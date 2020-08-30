<?php namespace App\Controllers;

class Empresa extends BaseController
{
	public function index()
	{
		$this->template('cadastros/empresa');
		//echo view('templates/header');
		//echo view('cadastros/empresa');
	//	echo view('templates/footer');
	}
}