<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->library('template');
	}

	function index()
	{

		$data['title']="Home";
		$data['content_view_page']= 'template/content';
		$this->template->display($data);
	}
	function formElement()
	{

		$data['title']="Home";
		$data['content_view_page']= 'form_element';
		$this->template->display($data);
	}
}
