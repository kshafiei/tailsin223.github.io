<?php
    $log_file_name = 'mylog.log'; // Change to the log file name
    $message = $_POST['message']; // incoming message
    file_put_contents($log_file_name, $message, FILE_APPEND);
    header('\index.html'); // redirect back to the main site
    echo("Kaveh has been notified of need for attention...");
    echo('<br>');
    echo("Please Hold...")
?>