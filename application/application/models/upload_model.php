<?php

class  Upload_model extends CI_Model{
   

	public function get_records()
	{
		$query = $this->db->get('contact_links');
		return $query -> result();
	}
    
	
	function add_record($data)
	{
		$this ->db->insert('images' , $data);
	}
	
	
	function update_record($data)
	{	
		$this->db->where('name', $data['name']);
		$this->db->update('contact_links' , $data);
	}
	
	
	function delete_row()
	{
		
		$this->db->where('c_id' , $this->uri->segment(3));
		$this->db->delete('contact_links');
	}
	
	function get_individual_records()
    { 
        $query = $this->db->get_where('contact_links', array('c_id' => $this->uri->segment(3)));
        return $query ->result();
    }
	
}

?>