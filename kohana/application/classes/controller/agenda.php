<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agenda extends Controller_Template {
	
	public $template = 'agenda/template';
	
	/* Initialize the variables needed in the webpage, this method is called
	 * before each action in the controller.
	 * @see system/classes/kohana/controller/Kohana_Controller_Template::before()
	 */
	public function before(){
		parent::before();
		
		if ($this->auto_render){
			// Initialize empty values
			$this->template->content = '';
			  
			$this->template->styles = array();
		}
	}
	
	/* Initializes the scripts and CSS for the page,
	 * this action is called after the action is proccessed.
	 * @see system/classes/kohana/controller/Kohana_Controller_Template::after()
	 */
	public function after(){
		if ($this->auto_render){
			$styles = array(
			'css/style.css' => 'screen, projection'
			);
			
			$this->template->styles = array_merge( $this->template->styles, $styles );
		}
		parent::after();
	}
	
	// ** Actions ** //
	
	public function action_index(){
		$data['contacts'] = ORM::factory('contact')->find_all();
		$this->template->content = View::factory('agenda/index', $data);
	}
	
	public function action_add(){
		if(isset($_POST['add_contact'])){
			$contact = ORM::factory('contact');
			$contact->name = $_POST['name'];
			$contact->phone = $_POST['phone'];
			$contact->address = $_POST['address'];
			
			$contact->save();
			
			Request::current()->redirect('agenda/index');
		} else {
			$data['action']  = 'add';
			$data['id'] 	 = 0;
			$data['name'] 	 = '';
			$data['phone'] 	 = '';
			$data['address'] = '';
			$this->template->content = View::factory('agenda/add', $data);
		}
	}
	
	public function action_edit(){
		// Get the contact you want to edit //
		$contact = ORM::factory('contact')->find($this->request->param('id'));
		
		if(isset($_POST['edit_contact'])){
			$contact->name = $_POST['name'];
			$contact->phone = $_POST['phone'];
			$contact->address = $_POST['address'];
			
			$contact->save();
			
			Request::current()->redirect('agenda/index');
		} else {
			$data['action']  = 'edit';
			$data['id'] 	 = $contact->id;
			$data['name'] 	 = $contact->name;
			$data['phone'] 	 = $contact->phone;
			$data['address'] = $contact->address;
			$this->template->content = View::factory('agenda/add', $data);
		}
	}
	
	public function action_delete(){
		$contact = ORM::factory('contact')->find($this->request->param('id'));
		$contact->delete();
		Request::current()->redirect('agenda/index');
	}

} 
