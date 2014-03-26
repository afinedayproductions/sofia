<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sofia extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('layout');
	}

	public function index() {

		// Define page title
		$this->layout->set_second_part_title('Développeur web / PHP à Toulouse');

		//! SET VIEWS
		$this->layout->views('welcome_message');
		$this->layout->view('v_footer');
		//! END SET VIEWS

	}
}

/* End of file sofia.php */
/* Location: ./application/controllers/quickcode.php */