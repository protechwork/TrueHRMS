<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        // Load the view and pass data if necessary
        $this->load->view('attandence_report_view');
    }

    public function fetch_data() {
        $plant = $this->input->post('plant');
        $department = $this->input->post('department');
        $fromDate = $this->input->post('fromDate');
        $toDate = $this->input->post('toDate');

        $this->db->select('id, plant, department, date, value');
        $this->db->from('report_data');

        if ($plant) {
            $this->db->where('plant', $plant);
        }
        if ($department) {
            $this->db->where('department', $department);
        }
        if ($fromDate) {
            $this->db->where('date >=', $fromDate);
        }
        if ($toDate) {
            $this->db->where('date <=', $toDate);
        }

        $query = $this->db->get();
        $data = $query->result_array();

        echo json_encode($data);
    }
}
