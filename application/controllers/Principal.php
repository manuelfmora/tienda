<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Principal extends CI_Controller{
    function  index()
    {
        $this->load->helper('url');

        $this->load->model('M_principal');
        
        $Pdestacados=$this->M_principal->get_destacados();        
        //$data['Pdestacados']=$this->M_principal->get_destacados();       
        $contenido = $this->load->view('V_productos',Array('productos'=>$Pdestacados),TRUE);
        $this->load->view('V_principal',Array('cuerpo'=>$contenido));
        //$this->load->view('V_productos',$data);        

    }

}
