<?php namespace APP\Models;

use App\Models\MY_Model;

class UnidadeSaudeModel extends MY_Model {

    public function cadastrar($params)
    {
        $camposObrigatorios = [
            'uni_sau_id_emp', 'uni_sau_nome', 'uni_sau_tipo',
            'uni_sau_municipio', 'uni_sau_endereco'
        ];

        if (existeCampoEValor($camposObrigatorios, $params)) {
            $insert = array_map(function($value) {
                return array(
                    'uni_sau_id_emp' => $value['uni_sau_id_emp'],
                    'uni_sau_nome' => $value['uni_sau_nome'],
                    'uni_sau_tipo' => $value['uni_sau_tipo'],
                    'uni_sau_municipio' => $value['uni_sau_municipio'],
                    'uni_sau_endereco' => $value['uni_sau_endereco']
                );
            }, [$params]);
            $this->db->table('metsys.unidade_saude')
                     ->insert($insert[0]);
            send(200, null, 'Cadastrado com sucesso');
        }
    }

    public function listar($params)
    {
        if (!validarId($params, 'usu_id_empresa')) {
            send(400, null, 'Sem id de empresa');
        }

        $result = $this->db->table('metsys.unidade_saude')
                           ->where('uni_sau_id_emp', $params['usu_id_empresa'])
                           ->get()
                           ->getResultArray();
        
        if (count($result)) {
            send(200, $result);
        }

        send(204);
    }
}