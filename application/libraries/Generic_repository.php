<?php

class Generic_repository {

protected $CI;

public function __construct() {
    $this->CI =& get_instance();
    $this->CI->load->database(); // Load the database library
}

// Get all records from the table
public function get_all($table) {
    return $this->CI->db->get($table)->result();
}

// Get a single record by ID
public function get_by_id($table, $id) {
    return $this->CI->db->get_where($table, ['id' => $id])->row();
}

// Insert a new record
public function insert($table, $data) {
    $this->CI->db->insert($table, $data);
    return $this->CI->db->insert_id();
}

// Update a record
public function update($table, $id, $data) {
    $this->CI->db->where('id', $id);
    $this->CI->db->update($table, $data);
}

// Update a record
public function update_master($table, $id, $data) {
    $this->CI->db->where('iMasterId', $id);
    $this->CI->db->update($table, $data);
}

// Update a record
public function update_field($table, $FiledID, $data) {
    $this->CI->db->where('FileldID', $FiledID);
    $this->CI->db->update($table, $data);
}

// Delete a record
public function delete($table, $id) {
    $this->CI->db->where('id', $id);
    $this->CI->db->delete($table);
}

// Add more generic methods as needed
public function query($Query) {
    return $this->CI->db->query($Query)->result_array();
}

}
?>