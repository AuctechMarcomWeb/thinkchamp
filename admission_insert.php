<?php
include('db_con.php'); 

$full_name        = trim($_POST['name'] ?? '');
$student_age      = trim($_POST['age'] ?? '');
$class_grade      = trim($_POST['class'] ?? '');
$mobile           = trim($_POST['phone'] ?? '');
$time_slot        = trim($_POST['time_slot'] ?? '');
$booking_date     = trim($_POST['booking_date'] ?? '');
$email            = trim($_POST['email'] ?? '');
$guardian_name    = trim($_POST['guardian_name'] ?? '');
$guardian_mobile  = trim($_POST['guardian_mobile'] ?? '');
$address          = trim($_POST['address'] ?? '');
$message          = trim($_POST['message'] ?? ''); 



$stmt = $con->prepare("INSERT INTO enrollment_form (
    full_name, student_age, class_grade, mobile, time_slot, booking_date,
    email, guardian_name, guardian_mobile, address, message
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssssssss", $full_name, $student_age, $class_grade, $mobile, $time_slot,
    $booking_date, $email, $guardian_name, $guardian_mobile, $address, $message );

if ($stmt->execute()) {
    echo "success";
} else {
    echo "Database error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>