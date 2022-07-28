<?php include('include/config.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Applicant register</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .hero-image {
            background-image:url("pictures/applicantreg.png");
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
<body style="background-color:#1c1f16; color:white;">
<div class="topnav">
<a class="active" href="home.html">Home</a>
                    <a href="applicantlogin.php">Applicant Login</a>
                    <a href="hrlogin.php">HR Login</a>
                    <a href="emplogin.php">Employee Login</a>
                    <a href="home.html">Logout</a>
                  </div>

<div class="jumbotron text-center hero-image" style="color:white;">
  <h1 style="margin-top:150px; font-size:50px;">Applicant register</h1>

  <nav>
  <button class="button1"><a href="home.html" style="color:white;">Home</a></button>
  </nav>
</div>

<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center custom-login">
            <h3>Register Now</h3>

        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <form action="" name="form1" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-12">
                            <div class="form-group col-lg-12">
                                <label>Username *</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Password *</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-12">
                                <label>Resume *</label>
                                <input type="url" name="resume" class="form-control" value="Specify drive link" required>
                            </div>

                            <div class="form-group col-lg-12">
                                <label>Name *</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="form-group col-lg-12">
                                <label>Email *</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Contact *</label>
                                <input type="text" name="contact" class="form-control" required onkeypress="return onlyNumberKey(event)" maxlength="10" minlength="10">
                            </div>
                          </div>

                          <div class="form-group col-lg-12">
                                <label>Address *</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>

                        <div class="text-center">
                            <button type="submit" name="submit1" class="button1">Register</button>

                        </div>

                        <div class="alert alert-success" id="success" style="margin-top: 10px; display: none">
                            <strong>Success!</strong> Registration successful!
                        </div>

                        <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                            <strong>Failure!</strong> Registration unsuccesful! Username might already exist
                        </div>
                    </form>
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

<script>
    function onlyNumberKey(evt) //used to allow only 10 digit number to be entered. does not allow you to type if anything else is typed
    {
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        {
            return false;   
        }
        else
        {
            return true;
        }
        
    }
</script>

<?php

    if(isset($_POST["submit1"]))
    {
        $count=0;
        $res=mysqli_query($sql,"select * from Applicant where username='$_POST[username]'") or die(mysqli_error($link));
        $count=mysqli_num_rows($res);
        if($count>0)
        {
            ?>
                <script type="text/javascript">
                    document.getElementById("success").style.display="none";
                    document.getElementById("failure").style.display="block";
                </script>
            <?php
        }
        else
        {
            /*$tm=md5(time()); //to make the resume name unique
            $fnm1=$_FILES["resume"]["name"];
            $dst1="./opt_resumes/".$tm.$fnm1; //for uploading the resumes in file opt_resumes, and making the resume name unique
            $dst_db1="opt_resume/".$tm.$fnm1; //for storing the resume in table inside database, and making the resume name unique
            move_uploaded_file($_FILES["resume"]["tmp_name"],$dst1);*/
            
        mysqli_query($sql, "insert into Applicant values('$_POST[username]','$_POST[password]','$_POST[resume]','$_POST[name]','$_POST[contact]','$_POST[email]','$_POST[address]')");
        ?>
                <script type="text/javascript">
                    document.getElementById("failure").style.display="none";
                    document.getElementById("success").style.display="block";
                </script>
        <?php
        }
    }
?>