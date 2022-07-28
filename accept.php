<?php
 include('include/config.php');
 $id=$_GET["id"];
 $username=$_GET["username"];
mysqli_query($sql,"update Application set ApplicationStatus='Resume approved' where JobID=$id and Username='$username';") or die(mysqli_error($sql));   
    ?>
<script>alert("Application accepted");
window.location="hrview.php";</script>
