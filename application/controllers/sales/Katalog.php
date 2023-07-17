<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    }
	
	public function index()
	{
		$d['title'] = "Katalog";
        $d['highlight_menu'] = "katalog";
        $d['content_view'] = "katalog/index";
        $this->load->view('sales/layout', $d);
	}
}
