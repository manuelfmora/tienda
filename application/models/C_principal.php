<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller 
{

	function __construct(){
            parent::__construct();
            $this->load->database();
        }
        
        public function get_destacados(){
            $query=$this->db->query();
            return $query->result();
            
        }
    

	
	
 }