<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$js = array(
            "assets/js/dashboard/sb-admin-2.min.js"
		);

		$this->template('dashboard/Dashboard', array('js'=>$js));
	}
}