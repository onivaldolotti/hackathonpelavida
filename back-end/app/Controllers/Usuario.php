<?php namespace App\Controllers;

class Usuario extends BaseController
{
	public function index()
	{
        $u = model('Usuario_model', false);
        $u->login();
	}
	//--------------------------------------------------------------------

}