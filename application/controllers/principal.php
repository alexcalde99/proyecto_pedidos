<?php

/**
 * Created by PhpStorm.
 * User: ALEX
 * Date: 29/04/2016
 * Time: 17:27
 */
class principal extends CI_Controller
{

    //*******************FUNCION INDEX*****************************************//
    //llama a la vista index.php
    public function index(){
        $this->load->view('/plantilla/index');
    }
}