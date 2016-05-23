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

    public function listadoProductos($id){

        $productos = $this->producto_model->getAllProductsByID($id);
        //le pasamos el resultado en un array
        $datos['productos']=$productos;
        $this->load->view('/plantilla/productos',$datos);

    }

    //**************************************************************************************
    //**************************************************************************************
    //************************FUNCIONES CARRITO COMPRA**************************************
    //**************************************************************************************
    //**************************************************************************************
    //**************************************************************************************


    //**funcion añadir al carrito**
    function add(){

        //$id = $this->input->post('id_producto');


        // Crear un array con la info del producto
        //Recogemos los datos enviados y lo metemos en el array
        $data = array(
            'id' => $this->input->post('id_producto'),
            'qty' => $this->input->post('cantidad'),
            'price' => $this->input->post('precio'),
            'name' => $this->input->post('descripcion'),
        );

        //print_r($data);

        //Añadimos la información a la cesta de la compra usando su método insert
        $this->cart->insert($data);

        //redireccionamos al mismo controlador
       redirect('productos');
    }

    function update_cart(){

// Recieve post values,calcute them and update
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];

            $data = array(
                'rowid' => $rowid,
                'price' => $price,
                'amount' => $amount,
                'qty' => $qty
            );

            $this->cart->update($data);
        }
        redirect('productos');
    }


}