<?php namespace App\Controllers;

class Paciente extends BaseController
{
	public function index()
	{
		return view('cadastros/paciente');
	}
}