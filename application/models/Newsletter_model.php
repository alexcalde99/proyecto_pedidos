<?php
/**
 * PHP grocery CRUD
 *
 * LICENSE
 *
 * Grocery CRUD is released with dual licensing, using the GPL v3 (license-gpl3.txt) and the MIT license (license-mit.txt).
 * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
 * Please see the corresponding license file for details of these licenses.
 * You are free to use, modify and distribute this software, but all copyright information must remain.
 *
 * @package    	grocery CRUD
 * @copyright  	Copyright (c) 2010 through 2012, John Skoumbourdis
 * @license    	https://github.com/scoumbourdis/grocery-crud/blob/master/license-grocery-crud.txt
 * @version    	1.4.2
 * @author     	John Skoumbourdis <scoumbourdisj@gmail.com>
 */

// ------------------------------------------------------------------------

/**
 * Grocery CRUD Model
 *
 *
 * @package    	grocery CRUD
 * @author     	John Skoumbourdis <scoumbourdisj@gmail.com>
 * @version    	1.5.4
 * @link		http://www.grocerycrud.com/documentation
 */
class Newsletter_model  extends CI_Model  {


    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
    }





    //********************************************************
    //*******************funcion newsleeter******************
    //********************************************************

    public function add_newsletter($email){

        //comprobamos si existe
        $sql = "SELECT * FROM newsletter WHERE email = '$email'";
        $query =$this->db->query($sql);

        if($query->num_rows()>0){
            return false;
        }
        $sql = "INSERT INTO `newsletter`(`email`) VALUES ('$email')";
        $query = $this->db->query($sql);
        if ($query) {
            return true;
        }
    }









}
