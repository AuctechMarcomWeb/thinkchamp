<?php
include('db_con.php'); 

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $phone === '' || $email === '' || $message === '') {
    echo "All fields are required.";
    exit;
}

$stmt = $con->prepare("INSERT INTO contact (name, phone, email,  message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $phone, $email, $message);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "Database error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>