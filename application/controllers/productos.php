<?php

/**
 * Created by PhpStorm.
 * User: ALEX
 * Date: 20/05/2016
 * Time: 17:49
 */
class Productos extends CI_Controller{

    function __construct(){
        parent::__construct();

        //cargaos el helper form
        $this->load->helper('form');
        $this->load->library('cart');

        //models que usaremos
        $this->load->model('restaurante_model');
        $this->load->model('producto_model');

    }




    function index(){

    }

    //********* FUNCION LISTADO DE PRODUCTOS POR ID DE RESTAURANTE**********
    public function listadoProductos($id){
    $productos = $this->producto_model->getAllProductsByID($id);
    //le pasamos el resultado en un array
    $datos['productos']=$productos;
    $this->load->view('/plantilla/productos',$datos);
}

    public function totalproductsByID($id){

    }

    public function productoPorID($id){
        $productos = $this->producto_model->getAllProductsByID($id);
        //le pasamos el resultado en un array
        $datos['productos']=$productos;
        $this->load->view('/plantilla/productos',$datos);
    }






}