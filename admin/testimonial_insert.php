<?php
session_start();

if (isset($_POST['submit'])) {
    include '../db_con.php';

    $price_id = rand(111, 9999999);

    $paragraph = mysqli_real_escape_string($con, trim($_POST['paragraph']));
    $name = mysqli_real_escape_string($con, trim($_POST['name']));

  
    if (empty($paragraph) || empty($name)) {
        echo "<script>alert('All fields are required!'); window.location='add_testimonial.php';</script>";
        exit;
    }

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $original_image_name = $_FILES['image']['name'];
        $image_extension = strtolower(pathinfo($original_image_name, PATHINFO_EXTENSION));

        $unique_image_name = uniqid('img_', true) . '.' . $image_extension;
        $target_dir = "testimonials_uploads/";
        $target_file = $target_dir . $unique_image_name;

        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }

        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'avif'];
        if (in_array($image_extension, $allowed_extensions)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {

                // Insert into DB
                $ins_que = "INSERT INTO testimonial (price_id, paragraph, name, image)
                            VALUES ('$price_id', '$paragraph', '$name', '$unique_image_name')";

                if (mysqli_query($con, $ins_que)) {
                    echo "<script>alert('Testimonial added successfully!'); window.location='add_testimonial.php';</script>";
                } else {
                    echo "<script>alert('Database Error: " . mysqli_error($con) . "'); window.location='add_testimonial.php';</script>";
                }
            } else {
                echo "<script>alert('Error uploading image to server.'); window.location='add_testimonial.php';</script>";
            }
        } else {
            echo "<script>alert('Invalid image type. Allowed: jpg, jpeg, png, gif, webp, avif.'); window.location='add_testimonial.php';</script>";
        }
    } else {
        echo "<script>alert('Please upload an image.'); window.location='add_testimonial.php';</script>";
    }
} else {
    header('location:add_testimonial.php');
    exit;
}
?>
