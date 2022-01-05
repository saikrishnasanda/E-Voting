<?php include ('head.php');?>
<head>
<link rel="stylesheet" href="css/style1.css"> 
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
<li><a href="index1.html">Home</a></li>
<li><a href="index.php">Vote Here</a></li>
<li><a href="admin/index.php">Admin</a></li>
<li><a href="about.html">About</a></li>
<li><a href="contactus.html">Contact US</a></li>
</ul>
</div>

</header>
		
    <div class="container">
    
        <div class="row">
        
		
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel panel panel-default">
				
                    <div class="panel-heading">
                        <center><h3 class="panel-title"> Log In</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" ><p style="color:#fbfd69">ID No.</p></label>
										<input class="form-control" placeholder="Please Enter Voter's ID Number" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" ><p style="color:#fbfd69">Password</p></label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            </fieldset>
							
									<?php include ('login_query.php');?>
                        </form>
                        <h4><b><p style="color:red">Note:</b> <i>One voter can only vote/login one time!!</i> </p></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
