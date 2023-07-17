<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
    }

	public function index()
	{
        $d = $this->user_model->login_check();
        $d['title'] = "Dashboard";
        $d['highlight_menu'] = "dashboard";

        $d['content_view'] = 'dashboard/index';
        $this->load->view('admin/layout', $d);
	}

}
