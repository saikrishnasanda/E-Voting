<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> E-Voting</title>
    <!-- Bootstrap Core CSS -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel = "stylesheet" type = "text/css" href = "css/style.css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head
<?php include("sess.php")?>
<body id="background">
    <div id="wrapper">
        <?php include ('side_bar.php');?>
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                            Manager</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Manager'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position" >
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<!--<h1><?php echo $fetch['firstname']." ".$fetch['lastname']?></h1>-->
							
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "manager_id" class = "managerclas"></center>
							</div>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>
				
				
				<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
							Vice Manager</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Vice Manager'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position" >
			<img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>"style ="border-radius:6px;" height = "150px" width = "150px">
			<!--<h1><?php echo $fetch['firstname']." ".$fetch['lastname']?></h1>-->
		<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
			<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "vicemanager_id" class = "vicemanagerclas"></center>
		</div>
						<?php
							}
						?>

						</div>
                       
                    </div>
                </div>
	
	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Accountant</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Accountant'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position" >
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<!--<h1><?php echo $fetch['firstname']." ".$fetch['lastname']?></h1>-->
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "accountant_id" class = "accountantclas"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Incharge</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Incharge'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position" >
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<!--<h1><?php echo $fetch['firstname']." ".$fetch['lastname']?></h1>-->
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "incharge_id" class = "secretaryclas"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Warden</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Warden'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<!--<h1><?php echo $fetch['firstname']." ".$fetch['lastname']?></h1>-->
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "warden_id" class = "wardenclas"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	 <div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Mess Head</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Mess Head'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<!--<h1><?php echo $fetch['firstname']." ".$fetch['lastname']?></h1>-->
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "messhead_id" class = "messheadclas"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<!-- <div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Work Leader</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Work Leader'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pio_id" class = "pio"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div> -->
	<!--<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>BUSINESS MANAGER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Business Manager'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "busman_id" class = "busman"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SGT @ ARMS</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Sgt. @ Arms'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "sgtarm_id" class = "sgtarm"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>MUSE</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Muse'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "muse_id" class = "muse"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>ESCORT</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Escort'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "escort_id" class = "escort"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>-->
	<div class="col-lg-6" style = "margin-left:350px;">
	  <div class="panel panel-primary">
            <div class="panel-heading">	
			<center><button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center>
			</div>
		</div>
	</div>
	</form>
</body>
<?php include ('script.php')?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			$(".managerclas").on("change", function(){
				if($(".managerclas:checked").length == 1)
					{
						$(".managerclas").attr("disabled", "disabled");
						$(".managerclas:checked").removeAttr("disabled");
					}
				else
					{
						$(".managerclas").removeAttr("disabled");
					}
			});
			
			$(".vicemanagerclas").on("change", function(){
				if($(".vicemanagerclas:checked").length == 1)
					{
						$(".vicemanagerclas").attr("disabled", "disabled");
						$(".vicemanagerclas:checked").removeAttr("disabled");
					}
				else
					{
						$(".vicemanagerclas").removeAttr("disabled");
					}
			});
			
			$(".accountantclas").on("change", function(){
				if($(".accountantclas:checked").length == 1)
					{
						$(".accountantclas").attr("disabled", "disabled");
						$(".accountantclas:checked").removeAttr("disabled");
					}
				else
					{
						$(".accountantclas").removeAttr("disabled");
					}
			});
			
			$(".secretaryclas").on("change", function(){
				if($(".secretaryclas:checked").length == 1)
					{
						$(".secretaryclas").attr("disabled", "disabled");
						$(".secretaryclas:checked").removeAttr("disabled");
					}
				else
					{
						$(".secretaryclas").removeAttr("disabled");
					}
			});
			
			$(".wardenclas").on("change", function(){
				if($(".wardenclas:checked").length == 1)
					{
						$(".wardenclas").attr("disabled", "disabled");
						$(".wardenclas:checked").removeAttr("disabled");
					}
				else
					{
						$(".wardenclas").removeAttr("disabled");
					}
			});
			
			$(".messheadclas").on("change", function(){
				if($(".messheadclas:checked").length == 1)
					{
						$(".messheadclas").attr("disabled", "disabled");
						$(".messheadclas:checked").removeAttr("disabled");
					}
				else
					{
						$(".messheadclas").removeAttr("disabled");
					}
				
			});
			$(".pio").on("change", function(){
				if($(".pio:checked").length == 1)
					{
						$(".pio").attr("disabled", "disabled");
						$(".pio:checked").removeAttr("disabled");
					}
				else
					{
						$(".pio").removeAttr("disabled");
					}
			});
			$(".busman").on("change", function(){
				if($(".busman:checked").length == 1)
				{
					$(".busman").attr("disabled", "disabled");
					$(".busman:checked").removeAttr("disabled");
				}
			else
				{
					$(".busman").removeAttr("disabled");
				}
			});
			$(".sgtarm").on("change", function(){
				if($(".sgtarm:checked").length == 1)
				{
					$(".sgtarm").attr("disabled", "disabled");
					$(".sgtarm:checked").removeAttr("disabled");
				}
			else
				{
					$(".sgtarm").removeAttr("disabled");
				}
			});
			$(".muse").on("change", function(){
				if($(".muse:checked").length == 1)
				{
					$(".muse").attr("disabled", "disabled");
					$(".muse:checked").removeAttr("disabled");
				}
			else
				{
					$(".muse").removeAttr("disabled");
				}
			});
			$(".escort").on("change", function(){
				if($(".escort:checked").length == 1)
				{
					$(".escort").attr("disabled", "disabled");
					$(".escort:checked").removeAttr("disabled");
				}
			else
				{
					$(".escort").removeAttr("disabled");
				}
			});
		});	
	</script>
</html>

