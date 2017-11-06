<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function user()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('user');
		$crud->set_subject('Data User');
		$crud->required_fields('user','password');
		$output = $crud->render();

		$this->_example_output($output);
	}
	
	public function kategori()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('kategori_wisata');
		$crud->set_subject('Data Kategori Wisata');
		$crud->required_fields('kategori');
		$output = $crud->render();

		$this->_example_output($output);
	}

	public function wisata()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('wisata');
			$crud->set_subject('Data Wisata');
			$crud->set_relation('id_kategori','kategori_wisata','kategori');
			$crud->display_as('id_kategori','Kategori');
			$crud->required_fields('wisata','id_kategori','keterangan','alamat','lat','lng','pic');
			$crud->set_field_upload('pic','assets/pics');
			$output = $crud->render();

			$this->_example_output($output);
	}
	
	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
}