<?php
 include('include/config.php');
 $id=$_GET["id"];
 $username=$_GET["username"];
mysqli_query($sql,"update Application set ApplicationStatus='No longer under consideration', InterviewStatus='No longer under consideration', TestLink='NULL', InterviewLink='NULL' where JobID=$id and Username='$username';") or die(mysqli_error($sql));   
    ?>
<script>alert("Application rejected");
window.location="hrview.php";</script>
