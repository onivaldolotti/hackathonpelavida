<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model {

    public function login($params)
    {
        send($params);
    }

}