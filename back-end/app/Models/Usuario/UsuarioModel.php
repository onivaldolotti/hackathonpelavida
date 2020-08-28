<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends MY_Model {

    public function login($params, $validarExistente = false)
    {
        //    ->select('US.usu_id_empresa, US.usu_id_unidade_saude, US.usu_max, US.usu_admin')
                  $db = $this->db->table('metsys.usuario AS US');
                  $db->join('metsys.empresa AS EM', 'EM.emp_id = US.usu_id_empresa');
                  $db->where('US.usu_login', $params['usu_login']);
                  if (!$validarExistente) {
                      $db->where('US.usu_senha', md5($params['usu_senha']));
                  }
                  $db->where('EM.emp_status_ativo', 1);
        $result = $db->get()->getResultArray();        

        if (count($result)) {
            if ($validarExistente) {
                return true;
            }
            send(200, $result);
        }

        if ($validarExistente) { // VALIDA SE O USUARIO JA FOI CADASTRADO OU NÃO
            return false;
        }
        send(400, null, 'Usuario e senha invalido');
    }

    public function cadastrar($params)
    {
        $this->validarIdCadastro($params);
        if (
            !existeValor($params, 'usu_nome') ||
            !existeValor($params, 'usu_login') ||
            !existeValor($params, 'usu_senha')
        ) {
            send(400, null, 'Sem nome de usuario ou login ou senha');
        }

        $novoUsuario = array_map(function($value){
            return array(
                'usu_nome' => $value['usu_nome'],
                'usu_login' => $value['usu_login'],
                'usu_senha' => md5($value['usu_senha']),
                'usu_id_empresa' => $value['usu_id_empresa'],
                'usu_id_unidade_saude' => $value['usu_id_unidade_saude']
            );
        }, [$params]);

        if (!$this->login($novoUsuario[0], true)) {
            $this->db->table('metsys.usuario')->insertBatch($novoUsuario);
            send(200, null, 'Usuario cadastrado com sucesso');
        }

        send(400, null, 'Usuario já cadastrado');
    }

}