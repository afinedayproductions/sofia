<?php
 
class M_works extends MY_Model {

	protected $table = 'afdp_works';
	protected $table_resume = 'afdp_works_resume';


	//! Get work detail
	public function getWork($work_id) {

		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('ID', $work_id);

		// Do the request
		$query = $this->db->get();

		// Return an object with all data
		return $query->row();

	} // END getWork()




	//! Get the last resume entries
	public function getLastWorks($limit) {

		$this->db->select('*');
		$this->db->from($this->table_resume);
		$this->db->order_by('ID', 'DESC');
		$this->db->limit($limit);

		// Do the request
		$query = $this->db->get();

		// Return an object with each result
		return $query->result();

	} // END getLastWorks()

} // END M_works

?>