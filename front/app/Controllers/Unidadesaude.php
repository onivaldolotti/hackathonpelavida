<?php namespace App\Controllers;

class Unidadesaude extends BaseController
{
	public function index()
	{
		$js = array(
            "assets/js/cadastro/unidadeSaude.js"
		);

		$this->template('cadastros/UnidadeSaude', array('js' => $js));
	}
}