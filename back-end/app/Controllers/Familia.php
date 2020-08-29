<?php namespace App\Controllers;

class Familia extends BaseController
{
	function __construct()
	{
		$this->FamiliaModel = model('App\Models\Familia\FamiliaModel', false);
	}
	
	public function cadastrar()
	{
		$this->FamiliaModel->cadastrar(getContents());
	}

}