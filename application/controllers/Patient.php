<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends MY_Controller
{
	public function __construct()
	{
        parent::__construct();
		$this->data['scripts'][] = 'angular/main.js';
	}

	public function index()
	{
		$this->patient();
	}

	public function patient()
	{
        $this->active_page = 'patient';
		$this->data['content'] = 'pages/patient';
		$this->data['modals'][] = 'includes/modals/patient_form';
		$this->data['scripts'][] = 'angular/controllers/patient.js';
		$this->load->view('main_layout', $this->data);
	}
}
