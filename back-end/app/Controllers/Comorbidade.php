<?php namespace App\Controllers;

class Comorbidade extends BaseController
{
	function __construct()
	{
		$this->ComorbidadeModel = model('App\Models\Comorbidade\ComorbidadeModel', false);
	}
	
	public function cadastrar()
	{
		$this->ComorbidadeModel->cadastrar(getContents());
	}

}