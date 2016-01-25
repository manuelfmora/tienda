<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Principal extends CI_Controller{
    function  index()
    {
        $this->load->helper('url');
        $contenido = $this->load->view('V_productos',Array(),TRUE);
        $this->load->view('V_principal',Array('cuerpo'=>$contenido));        
    }

}
