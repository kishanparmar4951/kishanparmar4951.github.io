<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $budget  = htmlspecialchars($_POST['budget']); // <-- new field

    $log_entry = "Date: " . date("Y-m-d H:i:s") . "\n" .
                 "Name: $name\n" .
                 "Email: $email\n" .
                 "Message: $message\n" .
                 "Budget: $budget\n" .
                 "---------------------------\n";

    file_put_contents("form-log.txt", $log_entry, FILE_APPEND | LOCK_EX);

    echo "Thank you, $name! Your message has been received.";
}
?>
