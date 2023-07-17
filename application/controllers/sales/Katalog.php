<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    }
	
	public function index()
	{
		$d['title'] = "Dashboard";
        $d['highlight_menu'] = "dashboard";
        $d['content_view'] = "katalog/index";
        $this->load->view('sales/layout', $d);
	}
}
