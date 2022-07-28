<?php session_start();
include('include/config.php'); 
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
            background-image:url("pictures/applicantview.png");
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
                  <a href="applicantview.php">View jobs</a>
                  <a href="appstatus.php">Application status</a>
                  <a href="home.html">Logout</a>
                  </div>
                  <div class="jumbotron text-center hero-image" style="color:white;">
                    <h1 style="margin-top:150px; font-size:50px;">View jobs</h1>
                    <nav>
                    <button class="button1"><a href="home.html" style="color:white;">Home</a></button>
                    </nav>
                    </div>
                    <div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center custom-login" style="color:white;">
            <h3>Job details</h3>
        </div>
        <div class="content-error">
            <div class="hpanel">
                  <div class="panel-body">
                    <?php 
                        $q = "select * from Application natural join Job where username='$_SESSION[username]';";
                        $res=mysqli_query($sql,$q);
                        while($row=mysqli_fetch_array($res)) { 
                    ?>
<div class="site-footer">
                    <div class="container">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <h6> Application Status </h6>
                    <p> <?php echo $row['ApplicationStatus']; ?></p> <br>
                    <h6> Interview Status </h6>
                    <p> <?php echo $row['InterviewStatus']; ?></p> <br>
                    <h6> Test Link </h6>
                    <p><a href="<?php echo $row['TestLink']; ?>"><?php echo $row['TestLink']; ?></a></p> <br>
                    <h6> Test Date </h6>
                    <p> <?php echo $row['TestDate']; ?></p> <br>
                    <h6> Interview Link </h6>
                    <p><a href="<?php echo $row['InterviewLink']; ?>"><?php echo $row['InterviewLink']; ?></a></p> <br>
                    <h6> Interview Date </h6>
                    <p> <?php echo $row['InterviewDate']; ?></p> <br>
                    <hr style="width:200%;">
                        </div>

                        <div class="col-xs-6 col-md-3">
                      
                      </div>
          
                      <div class="col-xs-6 col-md-3">
                          <ul class="footer-links">
                            <h6><?php echo $row['Rolename']; ?></h6>
                          </ul>
                        </div>
                </div>
                <?php
                        }
                    ?>
                  </div>
</div>
            </div>
        </div>
    </div>
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