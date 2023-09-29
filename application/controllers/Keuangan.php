<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');
        if ($this->session->userdata('logged_in') != true || $this->session->userdata('role') !== 'keuangan') {
            redirect(base_url().'auth');
        }
	}

	public function index()
	{
		$this->load->view('keuangan/index');
	}

	public function pembayaran()
	{
		$data['pembayaran'] = $this->m_model->get_data('pembayaran')->result();
		$this->load->view('keuangan/pembayaran', $data);
	}
}
?>