<?php namespace App\Models;

use CodeIgniter\Model;

class FamiliaModel extends MY_Model {

    public function cadastrar($dados)
    {
        if (isset($dados['fam_sobrenome']) && strlen($dados['fam_sobrenome'] > 0) ) {
            send(400, null, 'Sem descrição do sobrenome');
        }
        $build = $this->db->table('metsys.familia');
        $build->insert($dados);
        send(200, array("id"=> $this->db->insertID()));
    }

}