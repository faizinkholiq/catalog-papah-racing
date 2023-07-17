<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Processing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    }
	
	public function index()
	{
		$d['title'] = "Processing";
        $d['highlight_menu'] = "processing";
        $d['content_view'] = "processing/index";
        $this->load->view('sales/layout', $d);
	}
}
