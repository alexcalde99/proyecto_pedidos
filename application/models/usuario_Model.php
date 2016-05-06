<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ALEX
 * Date: 06/05/2016
 * Time: 17:31
 */
class usuario_Model extends CI_Model{

public function __construct(){
    parent::__construct();

}

    //************FUNCION LOGIN****************
    //recibe un usuario y un password que se comprobara en la bdd
    public function login($usuario,$password){

        $this->db->where('usuario');
        $this->db->where('password');
        $q=$this->db->get('usuarios');
        //nos devuelve una fila si el usuario es correcto
        if($q->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }

    //*********FUNCION VALIDAR USUARIO*********************
    //Consultara la bdd si el usuario existe
    public function validarUsuari($usuario, $clave){
        //Ponemos ?para no enviar el user por la url..Mas seguro
        $sql = "SELECT * FROM usuarios WHERE usuario=?";
        //pasamos la query y el usuario
        $query = $this->db->query($sql, array($usuario));
        //Si el numero de columnas es mayor que 1, significa que existe
        if ($query->num_rows() == 1) {
            //De la consulta obtenemos la fila, para poder extraer el password
            $fila = $query->row();
            //sacamos el pass de la bdd
            $clave_bdd = $fila->password;
            /*$clave_cifrada = $fila->password;
            $clave_decodificada = $this->encrypt->decode($clave_cifrada);*/
            if ($clave_bdd == $clave) {
                return true;
                /*$userData = array(
                    'user_id' => $fila->id,
                    'user_email' => $fila->email,
                    'user_nombre' => $fila->nombre);
                //$this->session->set_userdata($userData);*/

            }
        } else {
            return false;
        }
    }

    //*************FUNCION GETUALLSUARIOS*******************************
    public function getAllUsuarios() {
        $sql = "SELECT * FROM usuarios ORDER BY id_usuario";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

}