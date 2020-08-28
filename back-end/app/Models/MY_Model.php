<?php namespace App\Models;

use CodeIgniter\Model;

class MY_Model extends Model {
    public $db; 

    function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function validarIdCadastro($params)
    {
        if (!validarId($params, 'usu_id_empresa') || !validarId($params, 'usu_id_unidade_saude')) {
            send(400, null, 'Sem id de empresa ou unidade de saude');
        }

        return true;
    }
}