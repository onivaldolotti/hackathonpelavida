<?php namespace App\Controllers;

class Usuario extends BaseController
{
	public function index()
	{
		$js = array(
            "assets/js/cadastro/usuario.js"
		);

		$this->template('cadastros/Usuario', array('js' => $js));
	}
}