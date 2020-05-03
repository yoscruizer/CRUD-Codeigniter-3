<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

    function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
    }

	 function index(){
		$data['title'] = "Latihan CRUD codeigniter 3";
		$data['nama'] = "Yosep Alfatah";
 		$this->load->view('v_header');
 		$this->load->view('v_latihan',$data);
 		$this->load->view('v_footer');
	}


}
