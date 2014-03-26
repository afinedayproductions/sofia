<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sofia extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('layout');
	}

	public function index() {

		// Define page title
		$this->layout->set_second_part_title('Développeur web / PHP à Toulouse');

		//! ADD JS
		$this->layout->add_js('nav.fixed');
		$this->layout->add_js('smooth-scroll');
		//! END ADD JS

		//! SET VIEWS
		$this->layout->views('v_header');
		$this->layout->views('v_nav');
		$this->layout->views('v_works');
		$this->layout->views('v_profil');
		$this->layout->views('v_savoir-faire');
		$this->layout->view('v_footer');
		//! END SET VIEWS

	}
}

/* End of file sofia.php */
/* Location: ./application/controllers/quickcode.php */