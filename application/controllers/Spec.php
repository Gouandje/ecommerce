<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Category Controller
*/
class Spec extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if(!isset($this->session->userid) && ($this->session->userstatus !=1)){
			redirect('Login');
		}
		$data =array();
		$this->load->model('SpecModel');


	}


	public function add_spec_form(){
		$data['models'] = $this->SpecModel->get_all_product();
		$data['main_content'] = $this->load->view('back/add_spec','',true);
		$this->load->view('back/adminpanel',$data);
	}
	public function save_spec(){ 
		$this->form_validation->set_rules('Sp_name','le nom est obligatoire','required|min_length[2]');
		$this->form_validation->set_rules('sp_val','le valeur est obligatoire','required|min_length[2]');
		if($this->form_validation->run()){
		$this->SpecModel->add_spec_model();
	$this->session->set_flashdata("flsh_msg","<font class='success'>spec Ajoutée avec succès</font>");
           redirect('spec-list');
		}else{
			$this->add_spec_form();
		}
	}
}
