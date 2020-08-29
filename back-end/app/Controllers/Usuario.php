<?php namespace App\Controllers;

class Usuario extends BaseController
{
	function __construct()
	{
		$this->usuarioModel = model('App\Models\Usuario\UsuarioModel', false);
	}

	public function login()
	{
        $this->usuarioModel->login(getContents());
	}
	
	public function cadastrar()
	{
		$this->usuarioModel->cadastrar(getContents());
	}

}