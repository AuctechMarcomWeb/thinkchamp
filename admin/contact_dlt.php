<?php
if (isset($_POST['delete'])) {
    include '../db_con.php'; // Include your database connection

    $user_id = intval($_POST['user_id']); // Ensure the user ID is an integer to prevent SQL injection

    // Prepare the delete query
    $del_que = "DELETE FROM contact WHERE id = $user_id";

    // Execute the delete query
    if (mysqli_query($con, $del_que)) {
        echo "<script>alert('Data deleted successfully!');</script>";
        echo "<script>window.location='contact_list.php';</script>"; // Redirect to your contact list page
    } else {
        echo "<script>alert('Error deleting record: " . mysqli_error($con) . "');</script>";
        echo "<script>window.location='contact_list.php';</script>";
    }
} else {
    header('Location: contact_list.php'); // Redirect if the delete button was not clicked
}
?>
