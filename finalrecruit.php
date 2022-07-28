<?php
 include('include/config.php');
 $id=$_GET["id"];
 $username=$_GET["username"];
mysqli_query($sql,"update Application set ApplicationStatus='Recruited', InterviewStatus='Recruited', TestLink='NULL', TestDate='NULL', InterviewLink='NULL', InterviewDate='NULL' where JobID=$id and Username='$username';") or die(mysqli_error($sql));   
?>   
<script>alert("Applicant recruited");
window.location="hrview.php";</script>