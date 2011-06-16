<?php

/**
 * Active Record model example.
 * @author mark
 *
 */
class Contact_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
    
    public function getAllContacts(){
    	$query = $this->db->get('contacts');
    	return $query->result();    	
    }
    
    public function addContact($name='', $phone='', $address=''){
    	if($name == '' && $phone == '' && $address == '') return false;
    	$data = array(
		   'name'    => $name,
		   'phone'   => $phone,
		   'address' => $address
		);
		
		$this->db->insert('contacts', $data); 
    }
    
	public function editContact($id = 0, $name='', $phone='', $address=''){
    	if($id == 0 && $name == '' && $phone == '' && $address == '') return false;
    	$data = array(
		   'name'    => $name,
		   'phone'   => $phone,
		   'address' => $address
		);
		$this->db->where('id', $id);
		$this->db->update('contacts', $data); 
    }
    
    public function getContact($id = 0){
    	if($id == 0) return false;
    	$query = $this->db->get_where('contacts', array('id' => $id));
    	return $query->result();
    }
    public function deleteContact($id = 0){
    	if($id == 0) return false;
    	$this->db->delete('contacts', array('id' => $id)); 
    }
}