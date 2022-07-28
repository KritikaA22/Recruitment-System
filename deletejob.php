<?php
 include('include/config.php');
    $id=$_GET['ID'];
    $q = "delete from job where JobID=$id;";
    mysqli_query($sql,$q);
    header('location:viewjob.php');
    ?>