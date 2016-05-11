<?php

/**
 * Created by PhpStorm.
 * User: ALEX
 * Date: 02/05/2016
 * Time: 19:30
 */
class restaurante_model extends CI_Model{


    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
    }

    public function getAllRestaurants() {
        $sql = "SELECT * FROM restaurantes";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {

            return $query->result();
        }
    }


}
