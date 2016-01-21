<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Principal extends CI_Controller{
    function  index()
    {
        $this->load->helper('url');
        $this->load->view('V_principal');        
    }

}
