<?php include ('head.php');?>

<head>
<link rel="stylesheet" href="style1.css"> 
<style>
    header{
        height:20%;
    }
</style>
</head>
<body>
<header>
    <div class="wrapper">
       
<ul class="nav-area">
<li><a href="../index1.html">Home</a></li>
<li><a href="../index.php">Vote Here</a></li>

<li><a href="index.php">Admin</a></li>
<li><a href="../about.html">About</a></li>
<li><a href="../contactus.html">Contact US</a></li>
</ul>
</div>

</header>
		

<body>
    <div class="container">
        <div class="row">
		<!-- <center><h3>E-Voting- Admin Panel</h3></center> -->
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">AdminLogIn</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" ><p style="color:#fbfd69">Username</p></label>
										<input class="form-control" placeholder="Please Enter your Username" name="username" type="text" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" ><p style="color:#fbfd69">Password</p></label>
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            </fieldset>
							
									<?php include ('login_query.php');?>
                        </form>
                    </div>
                </div>
            </div>
			
			 </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
