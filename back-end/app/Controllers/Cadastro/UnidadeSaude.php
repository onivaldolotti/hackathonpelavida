<?php namespace App\Controllers\Cadastro;

use CodeIgniter\Controller;

class UnidadeSaude extends Controller
{
	function __construct()
	{
		$this->UnidadeSaudeModel = model('App\Models\Cadastro\UnidadeSaude\UnidadeSaudeModel', false);
	}
	
	public function cadastrar()
	{
		$this->UnidadeSaudeModel->cadastrar(getContents());
    }

	public function listar()
	{
		$this->UnidadeSaudeModel->listar(getContents());
    }

	public function atualizar()
	{
		$this->UnidadeSaudeModel->atualizar(getContents());
	}

}