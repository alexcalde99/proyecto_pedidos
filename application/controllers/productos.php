<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class productos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

    }

    function index(){

    }

    function add_productos(){
    print_r($_POST);

    }

}



