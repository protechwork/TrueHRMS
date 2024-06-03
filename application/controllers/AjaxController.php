<?php
defined("BASEPATH") or exit("No direct script access allowed");

class AjaxController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary models or libraries
        //$this->load->database(); // Load the database library
        $this->load->library("generic_repository");
    }
    public function test()
    {
        echo "ddad";
    }
    public function get_field_value()
    {
        // Retrieve table name and field name from POST request
        $tableName = $this->input->post("tableName");
        $fieldName = $this->input->post("fieldName");
        $fieldvalue = $this->input->post("fieldvalue");
        $fielddisplay = $this->input->post("fielddisplay");

        try {
            $query = $this->generic_repository->get_by_field(
                $tableName,
                $fieldName,
                $fieldvalue,
                $fielddisplay
            );
            //var_dump($query);
            $json_data = json_encode($query);
            // Set the response header to JSON
            header("Content-Type: application/json");
            // Output the JSON data
            echo $json_data;
        } catch (Exception $e) {
            // Handle the exception
            // For example, you can log the error or provide a default response
            echo "An error occurred: " . $e->getMessage();
        }
    }
}
