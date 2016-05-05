<?php

/**
 * Created by PhpStorm.
 * User: ALEX
 * Date: 29/04/2016
 * Time: 17:27
 */
class principal extends CI_Controller
{

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');

        date_default_timezone_set('Europe/Madrid');

        //models que gastem
        $this->load->model('restaurante_model');


        //libreries
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('encrypt');
        $this->load->library('session');
    }

    //*******************FUNCION INDEX*****************************************//
    //llama a la vista index.php
    public function index(){
        $restaurantes = $this->restaurante_model->getAllRestaurants();
        //le pasamos el resultado en un array
        $datos['restaurantes']=$restaurantes;
        $this->load->view('/plantilla/index',$datos);
    }




}