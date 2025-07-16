<?php
include('db_con.php');

$name        = trim($_POST['name'] ?? '');
$email       = trim($_POST['email'] ?? '');
$phone       = trim($_POST['phone'] ?? '');
$education   = trim($_POST['education'] ?? '');
$experience  = trim($_POST['experience'] ?? '');
$subjects    = trim($_POST['subjects'] ?? '');
$skills      = trim($_POST['skills'] ?? '');
$address     = trim($_POST['address'] ?? '');
$message     = trim($_POST['message'] ?? '');

if (
    $name === '' || $email === '' || $phone === '' || $education === '' || 
    $experience === '' || $subjects === '' || $skills === '' || $address === ''
) {
    echo "All required fields must be filled.";
    exit;
}

$cvPath = '';
$cvFile = $_FILES['cv'] ?? null;



if ($cvFile && $cvFile['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $cvFile['tmp_name'];
    $fileName = $cvFile['name'];
    $fileSize = $cvFile['size'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedExt = ['pdf', 'jpg', 'jpeg', 'png'];
    $uploadDir = 'admin/teacher_cv/';


    if (!in_array($fileExt, $allowedExt)) {
        echo "Invalid file type. Only PDF, JPG, JPEG, PNG allowed.";
        exit;
    }

    if ($fileSize > 1 * 1024 * 1024) {
        echo "File size must be less than or equal to 1MB.";
        exit;
    }

    $newFileName = uniqid('cv_', true) . '.' . $fileExt;
    $destination = $uploadDir . $newFileName;

 
    if (move_uploaded_file($fileTmpPath, $destination)) {
        $cvPath = $newFileName; 
    } else {
        echo "File upload failed while moving to destination.";
        exit;
    }
} else {
    echo "Please upload your CV or Resume.";
    exit;
}


$stmt = $con->prepare("INSERT INTO teacher_applications 
    (name, email, phone, education, experience, subjects, skills, address, message, cv_file, added_on)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");

$stmt->bind_param(
    "ssssssssss", 
    $name, $email, $phone, $education, $experience, $subjects, $skills, $address, $message, $cvPath
);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "Database error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>