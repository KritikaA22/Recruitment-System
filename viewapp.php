<?php include('include/config.php'); 
$id=$_GET["ID"];
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Recruitment System</title>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="footer.html">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap"></script>
        <style>
            .hero-image {
            background-image:url("pictures/viewapp.png");
              background-color: #000000;
              height: 500px;
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
              position: relative;
            }
            
            .hero-text {
              text-align: center;
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              color: white
            }
            </style>
            </head>
            <body style="background-color:#1c1f16;">
                <div class="topnav">
                  <a class="active" href="home.html">Home</a>
                  <a href="hrview.php">View jobs</a>
                  <a href="home.html">Logout</a>
                  </div>
                  <div class="jumbotron text-center hero-image" style="color:white;">
                    <h1 style="margin-top:150px; font-size:50px;">Welcome HR!</h1>
                    <nav>
                    <button class="button1"><a href="home.html" style="color:white;">Home</a></button>
                    </nav>
                    </div>
                    <div style="color:white;">
                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Applicant Name</th>
                                            <th scope="col">Resume</th>
                                            <th scope="col">Contact No.</th>
                                            <th scope="col">Email ID</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Reject</th>
                                            <th scope="col">Accept</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        $res=mysqli_query($sql, "select Username,Name, Resume, ContactNo, EmailID, Address from Applicant natural join Application where JobID=$id and ApplicationStatus='In Progress';") or die(mysqli_error($sql)); 
                                        while($row=mysqli_fetch_array($res)) 
                                        {
                                            ?>
                                                <tr>
                                                    <td scope="row"><?php echo $row["Name"]; ?></td>
                                                    <td><a href="<?php echo $row["Resume"];?>"> <?php echo $row["Resume"];?> </a></td>
                                                    <td><?php echo $row["ContactNo"]; ?></td>
                                                    <td><?php echo $row["EmailID"]; ?></td>
                                                    <td><?php echo $row["Address"]; ?></td>
                                                    <td> <a href="reject.php?username=<?php echo $row["Username"];?>&id=<?php echo $id;?>">Reject</a></td>
                                                    <td> <a href="accept.php?username=<?php echo $row["Username"];?>&id=<?php echo $id;?>">Accept</a></td>
                                                </tr>
                                            <?php
                                        }
                                    ?>
                                        
                                        
                                    </tbody>
                                </table>
                    </div>






                  <br>
<footer class="site-footer" style="background-color:black;">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempor at diam suscipit tincidunt. Praesent nisl justo, condimentum a pharetra ut, semper a nibh. Fusce a quam odio. Nullam a turpis a lorem imperdiet ultrices placerat a ante. Maecenas vehicula metus fermentum, posuere ex vel, accumsan lectus.</p>
                  </div>
        
                  <div class="col-xs-6 col-md-3">
                      
                  </div>
      
                  <div class="col-xs-6 col-md-3">
                      <h6>Authors</h6>
                      <ul class="footer-links">
                        <li>Huma</li>
                        <li>Ishika</li>
                        <li>Kritika</li>
                      </ul>
                    </div>
                  
                </div>
                <hr>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved.
                    </p>
                  </div>
                </div>
              </div>
        </footer>



</body>

</html>