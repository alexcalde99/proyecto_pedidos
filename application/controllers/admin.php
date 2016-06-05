<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		//cargamos la libreria de session
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()	{
		$this->load->view('login');
	}

	public function sobre_nosotros(){

		$this->load->view('/plantilla/sobre_nosotros');

	}







	//**********************FUNCION LISTAR RESTAURANTES*******************************
	public function restaurantes(){
		$crud = new Grocery_CRUD();
		$crud->set_subject('Restaurantes');
		//DEcimos que el campo imagen sera tipo file, y le decimos la ruta donde guardará el fichero
		$crud->set_field_upload('imagen','assets/images/');
		//nombre de categoria en el restaurante....enla categoria restaurantes, y me sque la descruipcion
		$crud->set_relation('id_categoria','categorias','descripcion');
		//$crud->required_fields('nombre','direccion','telefono','id_categoria');
		$crud->display_as('imagen','Imagen(373x253)');
		$datos = $crud->render();
		$this->cargarVista($datos);
	}
//**********************FUNCION LISTAR CATEGIRIAS*******************************
	public function categorias(){
		$crud = new Grocery_CRUD();
		$crud->set_subject('Categorias');
		$datos = $crud->render();
		$this->cargarVista($datos);

	}
	//**********************FUNCION USUARIOS*******************************
	public function usuarios(){

		$crud = new Grocery_CRUD();
		$crud->set_subject('Usuarios');
		//primer campo, el nombre que tenemos en la tabla en la bdd
		//$crud->set_field_upload('imagen','assets/images/');
		//nombre de categoria en el restaurante....enla categoria restaurantes, y me sque la descruipcion
		//$crud->set_relation('id_categoria','categorias','descripcion');
		$datos = $crud->render();
		$this->cargarVista($datos);

	}
	//**********************FUNCION CRUD PRODUCTOS*******************************
	public function productos(){

		$crud = new Grocery_CRUD();
		$crud->set_table('productos');
		//Subject.  lo que saldra al lado del add-> add Restaurates
		$crud->set_subject('Productos');
		//display as_,le decimos que el campo id_restaurante nos lo saque como Restaurante
		$crud->display_as('id_restaurante','Restaurante');
		//DEcimos que el campo imagen sera tipo file, y le decimos la ruta donde guardará el fichero
		$crud->set_field_upload('imagen','assets/images/');
		$crud->display_as('imagen','Imagen(950x550)');
		//Id de la tabla, tabla, y campo que qeremos que sea selecionado en el desplegable
		$crud->set_relation('id_restaurante','restaurantes','nombre');
		$datos = $crud->render();
		$this->cargarVista($datos);

	}
	//**********************FUNCION CRUD PROMOCIONES*******************************
	public function promociones(){

		$crud = new Grocery_CRUD();
		$crud->set_table('promociones');
		//Subject.  lo que saldra al lado del add-> add Restaurates
		$crud->set_subject('Prmociones');
		//display as_,le decimos que el campo id_restaurante nos lo saque como Restaurante
		$crud->display_as('id_restaurante','Restaurante');
		//Relacionamos las tablas...una promocion pertenece a un restaurante Id de la tabla, tabla, y campo que qeremos que sea selecionado en el desplegable
		$crud->set_relation('id_restaurante','restaurantes','nombre');
		//DEcimos que el campo imagen sera tipo file, y le decimos la ruta donde guardará el fichero
		$crud->set_field_upload('imagen','assets/images/');
		$crud->display_as('imagen');
		$datos = $crud->render();
		$this->cargarVista($datos);

	}

	//**********************FUNCION QUE CARGA LOS RESULTADOS**********************
	public function cargarVista($datos){
		//cargamos la vista ejemplo y le pasamos los datos recogidos
		$this->load->view('admin.php',$datos);
	}


	//*********************FUNCION VALIDAR USUARIO*************************
	public function validar_Usuario() {
		//cargamos el modelo
		$this->load->model('usuario_model');
		//recogemos los valores del formulario
		$usuario = $this->input->post('usuario');
		$password = $this->input->post('password');
		//Llamamos a la funcion validar usuario del modelo, le pasamos los dos datos, nos devolerá true si es correcto,
		//devolverá false si el usuario no existe
		if ($this->usuario_model->validarUsuari($usuario, $password) == true) {
			//Metemos en un array los datos del usuario y lo pasamos a la vista
			//grabamos la variaboe de session
			$this->session->set_userdata('usuario', $usuario);
			$datos = array(
					'user' => $usuario,
					'output' =>""
			);
			$this->load->view('admin', $datos);
		} else {
			//si no es correcto, llamamos a la funcion index(); que nos volvera a cargar la vist del login
			$this->index();
		}
	}

	public function logout(){
		$this->session->unset_userdata('usuario');
		header("Location: http://localhost/pedidosaunclick/admin");
	}


}