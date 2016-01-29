<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_principal extends CI_Controller 
{

	function __construct(){
            parent::__construct();
            $this->load->database();
        }
        
        public function get_destacados(){
            $query=$this->db->query("select * from productos where  destacado='1'");
            return $query->result();
            
        }
        
         public function get_unproducto($id){
            $query=$this->db->query("select * from productos where  id_producto='$id'");
            return $query->result();
            
        }
    

	
	
 }