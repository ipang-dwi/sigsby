<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}
	
	public function index(){
		if($this->session->userdata('logged_in')!=""){
			$this->session->set_userdata('option','');
			$this->load->view('dashboard2');
		}
		else
			header('location:'.base_url().'');
	}
	
	public function user()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('username')!="" && $this->session->userdata('password')!=""){
			$this->session->set_userdata('option','user');
			$crud = new grocery_CRUD();
			
			$crud->set_language("indonesian");
			$crud->set_table('user');
			$crud->set_subject('Data User');
			$crud->required_fields('username','password');
			$crud->unset_print()
				 ->unset_export();
			$crud->callback_before_insert(array($this,'encrypt_password'));
			$crud->callback_before_update(array($this,'encrypt_password'));
			$output = $crud->render();

			$this->_example_output($output);
		}
		else
			header('location:'.base_url().'');
	}
	
	public function kategori()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('username')!="" && $this->session->userdata('password')!=""){
			$this->session->set_userdata('option','kategori');
			$crud = new grocery_CRUD();
			
			$crud->set_language("indonesian");
			$crud->set_table('kategori_wisata');
			$crud->set_subject('Data Kategori Wisata');
			$crud->required_fields('kategori');
			$crud->unset_print()
				 ->unset_export();
			$output = $crud->render();

			$this->_example_output($output);
		}
		else
			header('location:'.base_url().'');
	}

	public function wisata()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('username')!="" && $this->session->userdata('password')!=""){
			$this->session->set_userdata('option','wisata');	
			$crud = new grocery_CRUD();
			
			$crud->set_language("indonesian");
			$crud->set_table('wisata');
			$crud->set_subject('Data Wisata');
			$crud->set_relation('id_kategori','kategori_wisata','kategori');
			$crud->display_as('id_kategori','Kategori');
			$crud->set_relation_n_n('fasilitas', 'fasilitas_wisata', 'fasilitas', 'id_wisata', 'id_fasilitas', 'fasilitas');
			$crud->required_fields('wisata','id_kategori','keterangan','alamat','lat','lng','pic','fasilitas');
			$crud->set_field_upload('pic','assets/pics');
			$crud->unset_print()
				 ->unset_export();
			$output = $crud->render();

			$this->_example_output($output);
		}
		else
			header('location:'.base_url().'');
	}
	
	public function event()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('username')!="" && $this->session->userdata('password')!=""){
			$this->session->set_userdata('option','event');	
			$crud = new grocery_CRUD();
			
			$crud->set_language("indonesian");
			$crud->set_table('event');
			$crud->set_subject('Data Event');
			$crud->set_relation_n_n('fasilitas', 'fasilitas_event', 'fasilitas', 'id_event', 'id_fasilitas', 'fasilitas');
			$crud->required_fields('event','keterangan','alamat','lat','lng','pic','fasilitas');
			$crud->set_field_upload('pic','assets/pics');
			$crud->unset_print()
				 ->unset_export();
			$output = $crud->render();

			$this->_example_output($output);
		}
		else
			header('location:'.base_url().'');
	}
	
	public function fasilitas()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('username')!="" && $this->session->userdata('password')!=""){
			$this->session->set_userdata('option','fasilitas');	
			$crud = new grocery_CRUD();
			
			$crud->set_language("indonesian");
			$crud->set_table('fasilitas');
			$crud->set_subject('Data Fasilitas');
			$crud->set_relation('id_kategori','kategori_fasilitas','kategori_fasilitas');
			$crud->display_as('id_kategori','Kategori');
			$crud->required_fields('id_kategori','fasilitas','alamat');
			$crud->unset_print()
				 ->unset_export();
			$output = $crud->render();

			$this->_example_output($output);
		}
		else
			header('location:'.base_url().'');
	}
	
	public function kategori_fasilitas()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('username')!="" && $this->session->userdata('password')!=""){
			$this->session->set_userdata('option','kategori fasilitas');
			$crud = new grocery_CRUD();
			
			$crud->set_language("indonesian");
			$crud->set_table('kategori_fasilitas');
			$crud->set_subject('Data Kategori Fasilitas');
			$crud->required_fields('kategori_fasilitas');
			$crud->unset_print()
				 ->unset_export();
			$output = $crud->render();

			$this->_example_output($output);
		}
		else
			header('location:'.base_url().'');
	}
	
	public function encrypt_password($post_array, $primary_key = null)
    {
	    $this->load->helper('security');
	    $post_array['password'] = do_hash($post_array['password'].'@adDunyaa2$MataaAdDunyaa%4#AlMarAtus91Sholihah', 'md5');
	    return $post_array;
    }
	
	public function _example_output($output = null){
		$this->load->view('dashboard2.php',$output);
	}
	
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */