<?php namespace App\Controllers;

class Empresa extends BaseController
{
	public function index()
	{
		return view('cadastros/empresa');
	}
}