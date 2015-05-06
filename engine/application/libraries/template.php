<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template
{

	protected $ci;

	function __construct()
	{
		$this->ci = &get_instance();
	}

	function base($content, $data = null)
	{
		$data['head'] = $this->ci->load->view('templates/head', $data, true);
		$data['content'] = $this->ci->load->view($content, $data, true);
		$this->ci->load->view('templates/layout/base', $data);
	}

}