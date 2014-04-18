<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('layout');
	}


	//! Display profile page
	public function index() {

		


		/*** SET VIEW ***/

		// Page title
		$this->layout->set_second_part_title('Profil de Fabien MATHIS');

		// View
		$this->layout->views('v_nav-fixed');
		$this->layout->view('profil/v_profil.php');


		/*** END SET VIEW ***/

	} // END index()



} // END class Sofia

/* End of file profil.php */
/* Location: ./application/controllers/profil.php */