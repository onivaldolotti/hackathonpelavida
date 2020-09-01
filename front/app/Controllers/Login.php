<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$js = array(
            "assets/js/login/main.js"
		);

		$this->template('login/Login', array('js' => $js));
	}
}