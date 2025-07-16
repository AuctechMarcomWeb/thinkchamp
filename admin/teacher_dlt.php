<?php
if (isset($_POST['delete'])) {
    include '../db_con.php'; 

    $id = intval($_POST['id']);


    $get_query = "SELECT cv_file FROM teacher_applications WHERE id = $id";
    $result = mysqli_query($con, $get_query);
    $row = mysqli_fetch_assoc($result);

    if ($row && !empty($row['cv_file'])) {
        $cv_file = $row['cv_file'];
        $file_path = "teacher_cv/" . $cv_file;

  
        if (file_exists($file_path)) {
            unlink($file_path); 
        }
    }

  
    $del_query = "DELETE FROM teacher_applications WHERE id = $id";
    if (mysqli_query($con, $del_query)) {
        echo "<script>alert('Data and CV deleted successfully!');</script>";
        echo "<script>window.location='teacher-applications.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . mysqli_error($con) . "');</script>";
        echo "<script>window.location='teacher-applications.php';</script>";
    }
} else {
    header('Location: teacher-applications.php'); 
}
?>
