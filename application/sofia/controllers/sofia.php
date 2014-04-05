<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sofia extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('layout');
	}



	//! Main app page
	public function index() {

		// Define page title
		$this->layout->set_second_part_title('Développeur PHP - web à Toulouse');

		//! ADD JS
		$this->layout->add_js('nav.fixed');
		//$this->layout->add_js('smooth-scroll');
		//! END ADD JS

		// Get work resume
		$this->load->model('m_works');
		$works = $this->m_works->getLastWorksResume(3);
		$data['works'] = $works;

		//! SET VIEWS
		$this->layout->views('v_header');
		$this->layout->views('v_nav');
		$this->layout->views('v_works', $data);
		$this->layout->views('v_profil');
		$this->layout->views('v_savoir-faire');
		$this->layout->view('v_footer');
		//! END SET VIEWS

	} // END index()

} // END class Sofia

/* End of file sofia.php */
/* Location: ./application/controllers/sofia.php */