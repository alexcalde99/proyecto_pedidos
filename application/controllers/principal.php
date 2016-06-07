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
        //cargamos la libreria carrito
        $this->load->library('cart');

        $this->load->library('grocery_CRUD');

        date_default_timezone_set('Europe/Madrid');
        //models que usaremos
        $this->load->model('restaurante_model');
        $this->load->model('producto_model');
        $this->load->model('Promociones_model');
        $this->load->model('Newsletter_model');



        //librerias utilizadas
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('encrypt');
        $this->load->library('session');
        $this->load->helper('download');
        $this->load->library('email');
    }

    //*******************FUNCION INDEX*****************************************//
    //llama a la vista index.php
    public function index(){
        $restaurantes = $this->restaurante_model->getAllRestaurants();
        //le pasamos el resultado en un array
        $datos['restaurantes']=$restaurantes;
        $this->load->view('/plantilla/index',$datos);
    }

    public function sobre_nosotros(){

        $this->load->view('/plantilla/sobre_nosotros');

    }

    public function promociones(){

        $promociones = $this->Promociones_model->getAllpromotions();
        //metemos el ressultado en un array
        $datos['promociones'] = $promociones;

        $this->load->view('/plantilla/promociones',$datos);

    }

    public function contacto(){

        $this->load->view('/plantilla/contacto');

    }
    public function pedido_realizado(){

        $this->load->view('/plantilla/pedido_realizado');

    }

//*******************FUNCION DOWNLOADFILE*************************
    public function downloadFile(){

        $imagen = $this->input->post('imagen');
        $data = file_get_contents(base_url().'assets/images/'.$imagen);
        $name = 'promocion.jpg';
        force_download($name, $data);
    }

    public function newsletter(){
        $email = $this->input->post('email');
        $newsletter = $this->Newsletter_model->add_newsletter($email);

        if($newsletter==true){
            $respuesta="<div class=\"alert alert-success\" role=\"alert\">Te has suscrito correctamente</div>";

            $restaurantes = $this->restaurante_model->getAllRestaurants();
            //le pasamos el resultado en un array
            $datos['restaurantes']=$restaurantes;
            $datos['respuesta']=$respuesta;
            $this->load->view('plantilla/index' , $datos);
        }else{
            $respuesta="<div class=\"alert alert-warning\" role=\"alert\">Ya estás inscrito</div>";

            $restaurantes = $this->restaurante_model->getAllRestaurants();
            //le pasamos el resultado en un array
            $datos['restaurantes']=$restaurantes;
            $datos['respuesta']=$respuesta;
            $this->load->view('plantilla/index' , $datos);
        }




    }

    public function send_mail(){

        //Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';

        //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'smtp.gmail.com';

        //Nuestro usuario
        $config["smtp_user"] = 'alexcalde999@gmail.com';

        //Nuestra contraseña
        $config["smtp_pass"] = 'Sailer9a+';

        //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '587';

        //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';

        //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;

        //El email debe ser valido
        $config['validate'] = true;


        //Establecemos esta configuración
        $this->email->initialize($config);

        //Ponemos la dirección de correo que enviará el email y un nombre
        $this->email->from('alexcalde999@gmail.com', 'Alejandro Calderon');

        /*
         * Ponemos el o los destinatarios para los que va el email
         * en este caso al ser un formulario de contacto te lo enviarás a ti
         * mismo
         */
        $this->email->to('alexcalde999@gmail.com', 'Alejandro Calderon');

        //Definimos el asunto del mensaje
        $this->email->subject($this->input->post("asunto"));

        //Definimos el mensaje a enviar
        $this->email->message(
            "Email: ".$this->input->post("email").
            " Mensaje: ".$this->input->post("mensaje")
        );

        //Enviamos el email y si se produce bien o mal que avise con una flasdata
        if($this->email->send()){
            $this->session->set_flashdata('envio', 'Email enviado correctamente');
        }else{
            $this->session->set_flashdata('envio', '<div class="alert alert-success" role="alert">Mensaje enviado</div>');
        }

        redirect(site_url('principal/contacto'));
    }




}