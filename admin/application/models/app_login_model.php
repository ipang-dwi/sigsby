<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_Login_Model extends CI_Model {

	public function getLoginData($data)
	{
		$login['username'] = $data['username'];
		$login['password'] = md5($data['password'].'@adDunyaa2$MataaAdDunyaa%4#AlMarAtus91Sholihah');
		$cek = $this->db->get_where('user', $login);
		if($cek->num_rows()>0)
		{
			foreach($cek->result() as $qad)
			{
				$sess_data['logged_in'] = 'yesGetMeLoginBaby';
				$sess_data['id_user'] = $qad->id_user;
				$sess_data['username'] = $qad->username;
				$sess_data['password'] = $qad->password;
				$sess_data['jt'] = $qad->job_title;
				$sess_data['pic'] = $qad->pic;
				$sess_data['since'] = $qad->since;
				$sess_data['option'] = '';
				$sess_data['rgmap'] = '0';
				$this->session->set_userdata($sess_data);
			}
			header('location:'.base_url().'');
		}
		else
		{
			$this->session->set_flashdata('result_login', "Maaf, kombinasi username dan password yang anda masukkan tidak valid dengan database kami.");
			header('location:'.base_url().'');
		}
	}
}

/* End of file app_login_model.php */
/* Location: ./application/models/app_login_model.php */