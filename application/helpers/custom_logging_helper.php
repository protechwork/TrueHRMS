
<?php 
// application/helpers/custom_logging_helper.php

if (!function_exists('custom_log_message')) {
    function custom_log_message($level, $message,$ipaddress,$emp) {
        // Get the current date and time
        date_default_timezone_set('Asia/Kolkata');
        $datetime = date('Y-m-d H:i:s');

        // Define the log directory and file name with the current date
        $log_dir = APPPATH . 'logs/';
        $log_file = 'custom_log_' . date('Y-m-d') . '.log';
        $log_path = $log_dir . $log_file;

        // Create the log directory if it doesn't exist
        if (!is_dir($log_dir)) {
            mkdir($log_dir, 0755, true);
        }

        // Format the log message with date-time prefix
        $log_message = "[$datetime] - $level - $message - $emp - $ipaddress" . PHP_EOL;

        // Write the log message to the log file
        file_put_contents($log_path, $log_message, FILE_APPEND);
    }
}
?>