<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class carrito extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        //cargaos el helper form
        $this->load->helper('form');
        $this->load->library('cart');
        $this->load->helper('url');

        $this->load->model('producto_model');
        $this->load->model('restaurante_model');

    }

    function index(){


    }


    //*******************************************************************
    //*************************FUNCION AÑADIR CARRITO********************
    //*******************************************************************
    function add(){
        // Crear un array con la info del producto
        //Recogemos los datos enviados y lo metemos en el array
        $data = array(
            'id'      => $this->input->post('id_producto'),
            'price'   => $this->input->post('precio'),
            'name'    => $this->input->post('descripcion'),
            'qty'     => 1
        );

        //Añadimos la información a la cesta de la compra usando su método insert
        $this->cart->insert($data);

        $id_restaurante = $this->input->post('id_restaurante');

        $productos = $this->producto_model->getAllProductsByID($id_restaurante);
        //le pasamos el resultado en un array
        $datos['productos']=$productos;
        $this->load->view('/plantilla/productos',$datos);
    }

    //*******************************************************************
    //*************************FUNCION BORRAR CARRITO********************
    //*******************************************************************
    function remove($rowid) {
// Check rowid value.
        if ($rowid==="all"){
// Destroy data which store in session.
            $this->cart->destroy();
        }else{
// Destroy selected rowid in session.
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
// Update cart data, after cancel.
            $this->cart->update($data);
        }

        //llamamos al controlador principal funcion index
        redirect('principal');

    }

    //*******************************************************************
    //*************************FUNCION ACTUALIZAR CARRITO****************
    //*******************************************************************
    public function update($rowid){
        $data=$this->cart->update(array(
            'rowid'=>$rowid,
            'qty'=> $this->input->post('quantity')
    ));

        $this->cart->update($data);

        redirect('plantilla/carrito');
    }


    //*******************************************************************
    //*************************FUNCION GUARDAR PEDIDO********************
    //*******************************************************************
    public function save_order(){
// This will store all values which inserted from user.
        $customer = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone')
        );
// And store user information in database.
        $cust_id = $this->billing_model->insert_customer($customer);

        $order = array(
            'date' => date('Y-m-d'),
            'customerid' => $cust_id
        );

        $ord_id = $this->billing_model->insert_order($order);

        if ($cart = $this->cart->contents()):
            foreach ($cart as $item):
                $order_detail = array(
                    'orderid' => $ord_id,
                    'productid' => $item['id'],
                    'quantity' => $item['qty'],
                    'price' => $item['price']
                );

// Insert product imformation with order detail, store in cart also store in database.

                $cust_id = $this->billing_model->insert_order_detail($order_detail);
            endforeach;
        endif;

// After storing all imformation in database load "billing_success".
        $this->load->view('billing_success');
    }



    function update_cart(){
// Recieve post values,calcute them and update
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart){
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
        $id_restaurante = $this->input->post('id_restaurante');

        $productos = $this->producto_model->getAllProductsByID($id_restaurante);
        //le pasamos el resultado en un array
        $datos['productos']=$productos;
        $this->load->view('/plantilla/productos',$datos);

    }

    function billing_view(){
// Load "billing_view".
        $this->load->view('plantilla/pedidos');
    }
}





