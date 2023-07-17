<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
        $this->load->library('form_validation');
    }
	
	public function index()
	{	
		$data_session = $this->session->userdata('sess_data');
		if ($data_session == TRUE) {
			switch($data_session['role']){
				case 1:
					redirect('admin/dashboard');
					break;
				case 2:
					redirect('sales/katalog');
					break;
			}
		}else{
			redirect('home/login');
		}
	}

	public function login(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() == TRUE) {
			$nd['username'] = $this->input->post('username');
            $nd['password'] = $this->input->post('password');

			if($check = $this->user_model->check_user($nd)){
				$data_session = $this->user_model->detail($check);
				$data_session['logged_in'] = TRUE;
				$this->session->set_userdata('sess_data', $data_session);

				switch($data_session['role']){
					case 1:
						redirect('admin/dashboard');
						break;
					case 2:
						redirect('sales/katalog');
						break;
				}
	
			}else{
				$this->session->set_flashdata('msg', 'Username / Password is wrong');
				$this->load->view('login');
			}
		}else{
			$data_session = $this->session->userdata('sess_data');
			if ($data_session == TRUE) {
				echo 'hj';
			}else{
				$this->load->view('login');
			}	
		}
    }

    public function logout()
	{
		if ($this->session->userdata('sess_data') == TRUE) {
            $this->session->sess_destroy();
        }

        redirect('home/login');
	}

}
