<?php namespace App\Controllers;

class Usuario extends BaseController
{
	public function index()
	{
		return view('cadastros/Usuario');
	}
}