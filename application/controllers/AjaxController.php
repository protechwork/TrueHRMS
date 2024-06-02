<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load necessary models or libraries
        //$this->load->database(); // Load the database library
        $this->load->library('generic_repository');
    }
    public function get_field_value()
      {
        // Retrieve table name and field name from POST request
        $tableName = $this->input->post('tableName');
        $fieldName = $this->input->post('fieldName');
        $fieldvalue= $this->input->post('fieldvalue');
        $fielddisplay= $this->input->post('fielddisplay');
        
        try {
            $query = $this->generic_repository->get_by_field($tableName, $fieldName, $fieldvalue,$fielddisplay);
            if ($query->num_rows() > 0) {
                // Fetch the result
                $row = $query->row();
                $fieldValue1 = $row->$fielddisplay;

                // Return the field value as JSON
                echo json_encode(array('success' => true, 'value' => $fieldValue1));
            } else {
                // Table or field not found
                echo json_encode(array('success' => false, 'message' => 'Table or field not found.'));
            }
        }



}