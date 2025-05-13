<?php
session_start();
#developed by @yeah_rabbani
$secret_key = 'your password'; // Change this to a long, complex string

if (isset($_GET['auth']) && $_GET['auth'] === $secret_key) {
    $_SESSION['admin'] = true;
    header('Location: admin-dashboard.php');
    exit;
} else {
    header('HTTP/1.0 404 Not Found');
    echo "Page not found.";
    exit;
}
?>
