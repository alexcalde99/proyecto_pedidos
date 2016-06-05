<?php

class producto_model extends CI_Model{


        public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
    }

    //*************FUNCION OBTENER TODOS LOS PRODUCTOS POR ID*****************
    //le pasamos un id y nos devuelve tods los productos de un mismo restaurante
    public function getAllProductsByID($id) {
        $sql = "SELECT * FROM `productos` WHERE `id_restaurante`= $id";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    //*************FUNCION OBTENER TODOS LOS PRODUCTOS POR ID*****************
    //le pasamos un id y nos devuelve tods los productos de un mismo restaurante
    public function getNumProductsByID($id)
    {
        $sql = "SELECT * FROM `productos` WHERE `id_restaurante`= $id";
        $query = $this->db->query($sql);

        return $query->num_rows();
    }

    //*************FUNCION OBTENER PRODUCTOS POR ID*****************
    //le pasamos un id y nos devuelve el producto
    public function getProductsByID($id) {
        $sql = "SELECT * FROM `productos` WHERE `id` = $id";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    //*************FUNCION OBTENER TODOS LOS PRODUCTOS *****************
    //le pasamos un id y nos devuelve tods los productos de un mismo restaurante
    public function getAllProducts() {
        $sql = "SELECT * FROM `productos`";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }


    /*public function getNumIncidencias() {
        $sql = "SELECT * FROM incidencias ORDER BY fecha_alta DESC ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
    }*/
}

