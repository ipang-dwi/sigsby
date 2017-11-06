<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')=="")
		{	
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('dashboard');
			}
			else
			{
				$dt['username'] = $this->input->post('username');
				$dt['password'] = $this->input->post('password');
				$this->app_login_model->getLoginData($dt);
			}
		}
		else if($this->session->userdata('logged_in')!="")
		{
			header('location:'.base_url().'dashboard/wisata');
		}
		/*else if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="user")
		{
			header('location:'.base_url().'dashboard_operator');
		}*/
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		header('location:'.base_url().'');
	}
}

/* End of file front.php */
/* Location: ./application/controllers/front.php */