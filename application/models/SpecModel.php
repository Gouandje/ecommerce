<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SpecModel extends CI_Model {

	public function add_spec_model(){
		// $data['spec_name'] = $this->input->post('spec_name',true);
		// $this->db->insert('tbl_brand',$data);
	}
		public function get_all_product(){
		$data = $this->db->select('*')
			->from('tbl_product')
			->order_by('pro_id','desc')
			->get()
			->result();
			return $data;
	}
	public function delete_spec_by_id($spec_id){
		// $this->db->where('spec_id', $spec_id);
		// $this->db->delete('tbl_brand');
	}
	public function edit_spec_by_id($spec_id){
		// $data = $this->db
		// 		->select('*')
		// 		->from('tbl_spec')
		// 		->where('spec_id', $brand_id)
		// 		->get()
		// 		->row();
		// return $data;
	}
	public function update_spec_by_id($spec_id){
		// $data['spec_name'] = $this->input->post('spec_name');
		// $this->db->where('spec_id', $spec_id);
		// $this->db->update('tbl_spec', $data); 
	}
	
}