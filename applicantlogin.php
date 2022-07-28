<?php 
    session_start();
    include('include/config.php'); 
?> 
<!doctype html>
<html>

<head>
<title>Applicant login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .hero-image {
            background-image:url("pictures/applicantlogin.png");
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
                  </div>
                  <div class="jumbotron text-center hero-image" style="color:white;">
  <h1 style="margin-top:150px; font-size:50px;">Applicant Login</h1>

  <nav>
  <button class="button1"><a href="home.html" style="color:white;">Home</a></button>
  </nav>
</div>

	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>User Login Form</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="" name="form1" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="**" required="" value="" name="password" id="password" class="form-control">

                            </div>

                            <button type="submit" name="login" class="btn btn-success btn-block loginbtn" width=20%>Login</button>
                            <a class="btn btn-default btn-block" href="user applicantreg.php">Register</a>

                            <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                            <strong>Failure!</strong> Invalid username or password!
                        </div>
                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>

    <?php
        if(isset($_POST["login"]))
        {
            $count=0;
            $res=mysqli_query($sql,"select * from Applicant where username='$_POST[username]' && password='$_POST[password]'");
            $count=mysqli_num_rows($res);
            if($count==0) //cannot login
            {
                ?>
                <script type="text/javascript">
                    document.getElementById("failure").style.display="block";
                </script>
            <?php
            }
            else //login successful
            {
                $_SESSION["username"]=$_POST["username"];
                ?>
                <script type="text/javascript">
                    window.location="applicant.php"
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