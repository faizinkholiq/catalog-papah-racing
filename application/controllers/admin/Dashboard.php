<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
    }

	public function index()
	{
        $d = $this->user_model->login_check();
        $d['title'] = "Dashboard";
        $d['highlight_menu'] = "dashboard";

        $d['content_view'] = ($d['role'] == 1)? 'dashboard/admin' : 'dashboard/member';
        $this->load->view('layout/template', $d);
	}

}
