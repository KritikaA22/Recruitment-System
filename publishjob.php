<?php include('include/config.php'); ?> 
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
            background-image:url("pictures/publishjob.png");
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
                  <a href="publishjob.php">Publish a new job</a>
                  <a href="viewjob.php">View jobs published</a>
                  <a href="home.html">Logout</a>
                  </div>
                  <div class="jumbotron text-center hero-image" style="color:white;">
                    <h1 style="margin-top:150px; font-size:50px;">Publish a new job</h1>
                    <nav>
                    <button class="button1"><a href="home.html" style="color:white;">Home</a></button>
                    </nav>
                    </div>
                    <div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center custom-login" style="color:white;">
            <h3>Enter job details</h3>
        </div>
        <div class="content-error">
            <div class="hpanel">
                  <div class="panel-body">
                    <form action="" name="form2" method="POST">
                    <div class="row">
                        <div class="form-group col-lg-12">
                        <div class="form-group col-lg-12">
                        <label style="color:white;">Role name *</label><br>
                        <input type="text" name="role" required size=150%><br><br>
                        </div>
                        <div class="form-group col-lg-12">
                        <label style="color:white;">Job Description *</label><br>
                        <input type="textarea" name="desc" required rows="50" cols="100" size=150%><br><br>
                        </div>
                        <div class="form-group col-lg-12">
                        <label style="color:white;">Job Location *</label><br>
                        <input type="text" name="loc" required size=150%><br><br>
                        </div>
                        <div class="form-group col-lg-12">
                        <label style="color:white;">Stipend *</label><br>
                        <input type="number" name="stip" required value="Enter a number only" size=150%><br><br>
                        </div>
                        <div class="form-group col-lg-12">
                        <label style="color:white;">Requirements *</label><br>
                        <input type="textarea" name="req" required rows="50" cols="100" size=150%><br><br>
                        </div>
                        <div class="form-group col-lg-12">
                        <label style="color:white;">Job takeaways *</label><br>
                        <input type="textarea" name="take" required rows="50" cols="100" size=150%><br><br>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit1" class="button1" size=150%>Submit</button>
                        </div></div></div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</div>
<?php
    if(isset($_POST["submit1"]))
    {
        
        
        mysqli_query($sql, "insert into job values(NULL, '$_POST[desc]', '$_POST[role]','$_POST[req]','$_POST[take]',$_POST[stip],'$_POST[loc]')") or die(mysqli_error($sql));
        ?>
            <script type="text/javascript">
                alert("Job added successfully!");
                window.location.href=window.location.href;
            </script>
        <?php
        
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