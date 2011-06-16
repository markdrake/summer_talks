<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Agenda extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('contact_model');
	}

	public function index()
	{		
		$data['contacts'] = $this->contact_model->getAllContacts();
		// Load the partial view //
		$this->template->write_view('content', 'agenda/index', $data);
		// Render the layout //
		$this->template->render();
	}
	
	public function add(){
		if($this->input->post()){
			$this->contact_model->addContact(
				$this->input->post('name'), 
				$this->input->post('phone'),
				$this->input->post('address')
			);
			redirect('/agenda/index');
		} else {
			$data['action'] = 'add';
			$data['id'] = 0;
			$data['name'] = '';
			$data['address'] = '';
			$data['phone'] = '';
			// Load the partial view //
			$this->template->write_view('content', 'agenda/add', $data);
			// Render the layout //
			$this->template->render();
		}
	}
	
	public function edit($id = 0){
		if($this->input->post()){
			$this->contact_model->editContact(
				$this->input->post('id'),
				$this->input->post('name'), 
				$this->input->post('phone'),
				$this->input->post('address')
			);
			redirect('/agenda/index');
		} else {
			if(is_numeric($id) && $id != 0){
				$contact = $this->contact_model->getContact($id);
				$data['action'] = 'edit';
				$data['id'] = $contact[0]->id;
				$data['name'] = $contact[0]->name;
				$data['address'] = $contact[0]->address;
				$data['phone'] = $contact[0]->phone;
				// Load the partial view //
				$this->template->write_view('content', 'agenda/add', $data);
				// Render the layout //
				$this->template->render();
			} else {
				throw new Exception('You must send an ID and must be a number');
			}
		}
	}
	
	public function delete($id = 0){
		if(is_numeric($id) && $id != 0){
			$this->contact_model->deleteContact($id);
		}
		redirect('/agenda/index');
	}
	
	public function hola(){
		$this->template->write_view('content', 'agenda/hola');
		$this->template->render();
	}
	
}