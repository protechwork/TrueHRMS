<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('is_logged_in')) {
    /**
     * Check if the user is logged in
     *
     * @return bool True if logged in, false otherwise
     */
    function is_logged_in() {
        $CI =& get_instance();
        return $CI->session->userdata('logged_in') ? true : false;
    }
}

if (!function_exists('check_role')) {
    /**
     * Check if the user has a specific role
     *
     * @param string $role Role to check
     * @return bool True if user has the role, false otherwise
     */
    function check_role($role) {
        $CI =& get_instance();
        // Assuming roles are stored in session or database
        $user_role = $CI->session->userdata('role');
        return ($user_role === $role);
    }
}
