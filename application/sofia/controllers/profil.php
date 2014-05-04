<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('layout');

		//! Load models
		$this->load->model('m_works');

	} // end __construct()


	//! Display profile page
	public function index() {

		/*** Récupération des données sur les langages ***/

		$langages = $this->m_works->getLanguages();
		$today = explode('-', date('Y-m-d'));

		foreach ($langages as $key => $langage) {

			$date = explode('-', $langage->duration);

			$duration_year = $today[0] - $date[0];
			$duration_month = $today[1] - $date[1];

			// month fix
			if($duration_month < 0)
				$duration_month += 12; // Add 12 months if month is negative

			// Date assignation
			if($duration_year == 0)
				$langage->duration = $duration_month . ' mois';
			else
				$langage->duration = $duration_year . ' ans';

		} // end foreach $langages

		$langages_column_separator = ceil((count($langages) / 3));

		/*** end  Récupération des données sur les langages ***/



		/*** SET CI DATA ***/

		$data['langages'] 					= $langages;
		$data['langages_column_separator'] 	= $langages_column_separator;

		/*** END SET CI DATA ***/



		/*** SET VIEW ***/

		// Page title
		$this->layout->set_second_part_title('Profil de Fabien MATHIS');

		// View
		$this->layout->views('v_nav-fixed');
		$this->layout->view('profil/v_profil', $data);

		/*** END SET VIEW ***/

	} // END index()



} // END class Sofia

/* End of file profil.php */
/* Location: ./application/controllers/profil.php */