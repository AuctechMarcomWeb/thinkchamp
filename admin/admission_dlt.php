<?php
if (isset($_POST['delete'])) {
    include '../db_con.php'; 

    $user_id = intval($_POST['user_id']); 

   
    $del_que = "DELETE FROM enrollment_form WHERE s_no = $user_id";

   
    if (mysqli_query($con, $del_que)) {
        echo "<script>alert('Data deleted successfully!');</script>";
        echo "<script>window.location='admission_list.php';</script>"; 
    } else {
        echo "<script>alert('Error deleting record: " . mysqli_error($con) . "');</script>";
        echo "<script>window.location='admission_list.php';</script>";
    }
} else {
    header('Location: admission_list.php'); 
}
?>