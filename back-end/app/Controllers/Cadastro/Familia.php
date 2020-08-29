<?php namespace App\Controllers;

class Familia extends BaseController
{
	function __construct()
	{
		$this->FamiliaModel = model('App\Models\Cadastro\Familia\FamiliaModel', false);
	}
	
	public function cadastrar()
	{
		$this->FamiliaModel->cadastrar(getContents());
	}

}