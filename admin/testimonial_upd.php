<?php
if (isset($_POST['update'])) {
    include '../db_con.php';

    extract($_POST);
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']); // Escaping input to prevent SQL Injection
    $paragraph = mysqli_real_escape_string($con, $_POST['paragraph']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $image_uploaded = false; // Flag to track if image upload is successful

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check === false) {
            echo "<script>alert('File is not a valid image.');</script>";
            exit;
        }

        // Generate a unique filename
        $image_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $unique_image_name = uniqid('img_', true) . '.' . $image_extension;

        // Set the target directory and file path
        $target_dir = "testimonials_uploads/";
        $target_file = $target_dir . $unique_image_name;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image_uploaded = true;
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            exit;
        }
    }

    // Update query
    $upd_que = "UPDATE testimonial 
                SET paragraph = '$paragraph', 
                    name = '$name', 
                    address = '$address'";

    // Append the image column only if an image was uploaded
    if ($image_uploaded) {
        $upd_que .= ", image = '$unique_image_name'";
    }

    $upd_que .= " WHERE price_id = '$price_id'";

    // Execute the update query
    if (mysqli_query($con, $upd_que)) {
        echo "<script>
                alert('Data updated successfully!');
                window.location='add_testimonial.php';
              </script>";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    header('location:add_testimonial.php');
}
?>
