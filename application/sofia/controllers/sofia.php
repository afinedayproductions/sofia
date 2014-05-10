<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sofia extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('layout');
		$this->layout->add_js('nav-fixed');

		//! Load models
		$this->load->model('m_works');
	}



	//! Main app page
	public function index() {

		

		/*** Récupération des 3 derniers travaux ***/

		$works = $this->m_works->getLastWorksResume(3);

		/*** end Récupération des 3 derniers travaux ***/



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
		$data['works'] = $works;

		/*** END SET CI DATA ***/



		/*** Define view ***/

		// Page title
		$this->layout->set_second_part_title('Développeur PHP / web à Toulouse');

		// views
		$this->layout->views('v_header');
		$this->layout->views('v_nav');
		$this->layout->views('v_works', $data);
		$this->layout->views('v_profil', $data);
		$this->layout->views('v_savoir-faire');
		$this->layout->view('v_footer');
		
		/*** Define view ***/



	} // END index()

} // END class Sofia

/* End of file sofia.php */
/* Location: ./application/controllers/sofia.php */