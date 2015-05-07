<?php
class insert_ctrl extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('insertrequest');
	}

	function index()
	{
		// Setting Values For Tabel Columns
		$status = 0;
		$data = array(
		'common_name' => $this->input->post('url'),
		'organization_name' => $this->input->post('org-name'),
		'address' => $this->input->post('address'),
		'city' => $this->input->post('city'),
		'postal_code' => $this->input->post('pos-code'),
		'status' => $this->input->$status,
		'username' => $this->input->post('User'),
		'id_country' => $this->input->post('country')
		);
		// Transfering Data To Model
		$this->insert_model->form_insert($data);
		// Loading View
		$this->load->view('form');
	}
}
?>
