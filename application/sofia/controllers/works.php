<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Works extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('layout');
	}



	//! Display work detail
	public function index($work_id = false) {

		if(!$work_id)
			show_404();


		// LOAD works model
		$this->load->model('m_works');

		// Get work's data
		$work = $this->m_works->getWork($work_id);

		$data['work'] = $work;

		//! SET VIEWS
		// page title
		$this->layout->set_second_part_title($work->title);
		$this->layout->views('v_nav');
		$this->layout->views('v_work', $data);
		$this->layout->view('v_footer');
		//! END SET VIEWS

	} // END index()


	// Display full historic of works
	public function works() {

		var_dump('works()');

	} // END works()

} // END class Sofia

/* End of file works.php */
/* Location: ./application/controllers/works.php */