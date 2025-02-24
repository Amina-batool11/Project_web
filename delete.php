<?php include'add.php';

session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}


$id=$_GET['id'];
$query="DELETE FROM product WHERE id='$id'";
$data=mysqli_query($connection,$query);
if($data) {
    ?>
    <script type ="text/javascript">
      alert("Data Deleted Successfully");
      window.open(" http://localhost/project/admin/view.php","_self");
</script>
<?php
}
else{
    ?>
    <script type ="text/javascript">
      alert("please try again");

</script>
<?php

}