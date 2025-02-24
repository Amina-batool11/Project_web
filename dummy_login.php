<html>
    <form method="post" action="">
        Name:
        <br> <input type="text" name="myname"> <br>
        Password:
        <br> <input type="text" name="mypass"> <br>
        <br> <input type="submit" name="save_btn" value ="Save">

</form>
</html>

<?php
if(isset($_POST['save_btn'])) {
    $p_name=$_POST['myname'];
    $p_pass=$_POST['mypass'];
    if( $p_name=== 'admin' && $p_pass=== '123'){
    ?>

<script type= "text/javascript">
        window.open(" http://localhost/project/fruitables/admin/register.php" ,"_self");
       
    </script>
    <?php
     }
      
    } 
    ?>

