<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Un_producto extends CI_Controller{
    function mostrar($id)
    {        
        $this->load->helper('url');

        $this->load->model('M_principal');
        
        $producto=$this->M_principal->get_unproducto($id);
             
        $contenido = $this->load->view('V_unproducto',Array('productos'=>$producto),TRUE);
        $this->load->view('V_principal',Array('cuerpo'=>$contenido));
    }
}

