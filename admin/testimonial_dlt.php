<?php
if(isset($_POST['delete']))
{
   include '../db_con.php';
   $price_id =$_POST['price_id'];

   $del_que ="delete from testimonial where price_id =$price_id";
   mysqli_query($con,$del_que);

?>
<script>
    alert('Data deleted successfully!');
    window.location='add_testimonial.php';
</script>

<?php
}
else
{
    header('location:add_testimonial.php');
}
?>



