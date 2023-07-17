<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    }
	
	public function index()
	{
		$d['title'] = "Produk";
        $d['highlight_menu'] = "produk";
        $d['content_view'] = "produk/index";
        $this->load->view('sales/layout', $d);
	}
}
