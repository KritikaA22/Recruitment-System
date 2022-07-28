<?php session_start();
 include('include/config.php'); 
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
            background-image:url("pictures/applyjob.png");
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
                  <a href="updateapplicant.php">Update details</a>
                  <a href="applicantview.php">Views jobs</a>
                  <a href="appstatus.php">Application status</a>
                  <a href="home.html">Logout</a>
                  </div>
                  <div class="jumbotron text-center hero-image" style="color:white;">
                    <h1 style="margin-top:150px; font-size:50px;">Welcome Applicant!</h1>
                    <nav>
                    <button class="button1"><a href="home.html" style="color:white;">Home</a></button>
                    </nav>
                    </div>
                    <div class="text-center m-b-md custom-login">
				<h3 style="color:white;">Enter username</h3>

			</div>
                    <div>
                    <form action="" name="form1" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-12">
                            <div class="form-group col-lg-12">
                                <label style="color:white;">Please re-enter your username for security purposes *</label>
                                <input type="text" name="username" class="form-control" required> <br>
                                <div class="text-center">
                            <button type="submit" name="submit1" class="button1">Submit</button>

                        </div>
                            </div></div></div></form>
                    </div>

<?php 
    if(isset($_POST["submit1"]))
    {
        $res1=mysqli_query($sql,"select * from Application where Username='$_POST[username]' && JobID=$id;") or die(mysqli_error($link));
        $count=mysqli_num_rows($res1);
            if($count==0) 
            {
              mysqli_query($sql,"insert into Application values ('In Progress', 'Yet to be conducted', $id,'$_POST[username]','NULL','NULL','NULL','NULL');") or die(mysqli_error($link));
                ?>
                <script type="text/javascript">
                   alert("Your application has been sent successfully");
                </script>
            <?php 
            }
            else
            {
                ?>
                <script>
                alert("Your application could not be submitted, please try again");
                </script>
                <?php
            }

    }
?>




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