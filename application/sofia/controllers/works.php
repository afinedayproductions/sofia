<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Works extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('layout');
	}


	//! Display work detail
	public function index($work_id = false) {

		// No params == 404
		if(!$work_id)
			show_404();

		// LOAD works model
		$this->load->model('m_works');

		// Get work's data
		$work = $this->m_works->getWork($work_id);

		// No work to display == 404
		if(empty($work))
			show_404();

		// We set readable date
		$this->load->library('Afdp_format');
		$work->date_debut = $this->afdp_format->setDateMonthYear($work->date_debut);
		$work->date_fin = $this->afdp_format->setDateMonthYear($work->date_fin);
		// We set correct URL
		$work->url = $this->afdp_format->setURL($work->url);
		// We set work->images as en array
		$work->images = $this->afdp_format->setImagesArray($work->ID, $work->images);

		// Si les mois sont les mêmes (projet d'un mois)
		if($work->date_debut == $work->date_fin)
			$work->periode = $work->date_debut;
		else if($work->date_fin == ' 0000')
			$work->periode = $work->date_debut . ' — En cours';
		else
			$work->periode = $work->date_debut . ' — ' . $work->date_fin;

		$data['work'] = $work;

		//! ADD JS
		$this->layout->add_js('sliders');
		//! END ADD JS
		//! SET VIEWS
		// page title
		$this->layout->set_second_part_title($work->title);
		$this->layout->views('v_nav');
		$this->layout->views('works/v_work', $data);
		$this->layout->view('v_footer');
		//! END SET VIEWS

	} // END index()


	// Display every work
	public function all() {

		// page title
		$this->layout->set_second_part_title('Travaux: PHP, JS, HTML5, CSS3 et plus');

		// Get all works
		$this->load->model('m_works');
		$works = $this->m_works->getWorksResume();

		$data['works'] = $works;

		$this->layout->views('v_nav');
		$this->layout->views('works/v_works', $data);
		$this->layout->view('v_footer');

	} // END all()

} // END class Sofia

/* End of file works.php */
/* Location: ./application/controllers/works.php */