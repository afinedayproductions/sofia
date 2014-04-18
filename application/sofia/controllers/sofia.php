<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sofia extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('layout');
		$this->layout->add_js('nav-fixed');
	}



	//! Main app page
	public function index() {

		// Get work resume
		$this->load->model('m_works');
		$works = $this->m_works->getLastWorksResume(3);
		$data['works'] = $works;



		/*** Define view ***/

		// Page title
		$this->layout->set_second_part_title('Développeur PHP - web à Toulouse');

		// views
		$this->layout->views('v_header');
		$this->layout->views('v_nav');
		$this->layout->views('v_works', $data);
		$this->layout->views('v_profil');
		$this->layout->views('v_savoir-faire');
		$this->layout->view('v_footer');
		
		/*** Define view ***/



	} // END index()

} // END class Sofia

/* End of file sofia.php */
/* Location: ./application/controllers/sofia.php */