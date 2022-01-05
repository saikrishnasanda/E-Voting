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
<?php include ('sess.php');?>

<body>

    <div id="row">
        <?php 
			include ('side_bar.php');
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['manager_id']))
					{
						$_SESSION['manager_id'] = "";
					}
					else
					{
						$_SESSION['manager_id'] = $_POST['manager_id'];
					}
					if(!ISSET($_POST['vicemanager_id']))
					{
						$_SESSION['vicemanager_id'] = "";
					}
					else
					{
						$_SESSION['vicemanager_id'] = $_POST['vicemanager_id'];
					}
					if(!ISSET($_POST['accountant_id']))
					{
						$_SESSION['accountant_id'] = "";
					}
					else
					{
						$_SESSION['accountant_id'] = $_POST['accountant_id'];
					}
					if(!ISSET($_POST['incharge_id']))
					{
						$_SESSION['incharge_id'] = "";
					}
					else
					{
						$_SESSION['incharge_id'] = $_POST['incharge_id'];
					}
					if(!ISSET($_POST['warden_id']))
					{
						$_SESSION['warden_id'] = "";
					}
					else
					{
						$_SESSION['warden_id'] = $_POST['warden_id'];
					}
					if(!ISSET($_POST['messhead_id']))
					{
						$_SESSION['messhead_id'] = "";
					}
					else
					{
						$_SESSION['messhead_id'] = $_POST['messhead_id'];
					}
					if(!ISSET($_POST['pio_id']))
					{
						$_SESSION['pio_id'] = "";
					}
					else
					{
						$_SESSION['pio_id'] = $_POST['pio_id'];
					}
					if(!ISSET($_POST['busman_id']))
					{
						$_SESSION['busman_id'] = "";
					}
					else
					{
						$_SESSION['busman_id'] = $_POST['busman_id'];
					}
					if(!ISSET($_POST['sgtarm_id']))
					{
						$_SESSION['sgtarm_id'] = "";
					}
					else
					{
						$_SESSION['sgtarm_id'] = $_POST['sgtarm_id'];
					}
					if(!ISSET($_POST['muse_id']))
					{
						$_SESSION['muse_id'] = "";
					}
					else
					{
						$_SESSION['muse_id'] = $_POST['muse_id'];
					}
					if(!ISSET($_POST['escort_id']))
					{
						$_SESSION['escort_id'] = "";
					}
					else
					{
						$_SESSION['escort_id'] = $_POST['escort_id'];
					}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:240px;" >
		  <div class = "alert alert-info">
			<label>MANAGER</label>
			<br />
			<?php
				if(!$_SESSION['manager_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[manager_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<label>VICE MANAGER</label>
			<br />
			<?php
				if(!$_SESSION['vicemanager_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vicemanager_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-info">
			<label>ACCOUNTANT</label>
			<br/>
			<?php
				if(!$_SESSION['accountant_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[accountant_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-success" >
			<label>INCHARGE</label>
			<br />
			<?php
				if(!$_SESSION['incharge_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[incharge_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<label>WARDEN</label>
			<br />
			<?php
				if(!$_SESSION['warden_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[warden_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<label>MESS HEAD</label>
			<br />
			<?php
				if(!$_SESSION['messhead_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[messhead_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<!--<div class = "alert alert-info" >
			<label>PIO</label>
			<br />
			<?php
				if(!$_SESSION['pio_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pio_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success">
			<label>BUSINESS MANAGER</label>
			<br />
			<?php
				if(!$_SESSION['busman_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[busman_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-info">
			<label>SGT @ ARMS</label>
			<br />
			<?php
				if(!$_SESSION['sgtarm_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sgtarm_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<label>MUSE</label>
			<br />
			<?php
				if(!$_SESSION['muse_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[muse_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			<label>ESCORT</label>
			<br />
			<?php
				if(!$_SESSION['escort_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[escort_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>-->
			<br />
			<button type = "submit" data-toggle = "modal" data-target = "#result" class = "btn btn-success" >Submit Final Vote</button>
		</div>
	</center>
	<div class="modal fade" id = "result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												
											</h4>
										</div>
										
										
                                        <div class="modal-body">
										<p class = "alert alert-danger">Are you sure you want to submit your Votes? </p>
                                    </div>
									
									<div class="modal-footer">
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</div>
									</div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
</body>
<?php include ('script.php')?>
</html>

