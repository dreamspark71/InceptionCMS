<?php

class  Jadd_model extends CI_Model{
   

	public function get_records()
	{
		$query = $this->db->get('jacket_advertisement');
		return $query -> result();
	}
    
	
	function add_record($data)
	{
		$this ->db->insert('jacket_advertisement' , $data);
	}
	
	
	function update_record($data)
	{	
		$this->db->where('add_id', $data['add_id']);
		$this->db->update('jacket_advertisement' , $data);
	}
	
	
	function delete_row()
	{
		
		$this->db->where('add_id' , $this->uri->segment(3));
		$this->db->delete('jacket_advertisement');
	}
	
	function get_individual_records()
    { 
        $query = $this->db->get_where('jacket_advertisement', array('add_id' => $this->uri->segment(3)));
        return $query ->result();
    }
	
	function update_pro_pic($data)
	{
		$this->db->where('add_id', $data['add_id']);
		$this->db->update('jacket_advertisement' , $data);
	}
	
}

?>