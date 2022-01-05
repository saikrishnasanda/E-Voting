<?php
	require 'admin/dbcon.php';
	session_start(); 
	
	if(!ISSET($_SESSION['voters_id']) || (trim($_SESSION['id']) == '') ){?>
		<!--header("location:index.php");-->
		<script>
			window.location = "index.php";
		</script>
<?php	
	}
		$session_id=$_SESSION['voters_id'];
		$voters_query = $conn->query("SELECT * FROM voters WHERE voters_id = '$session_id'") or die(mysqli_errno());
		$voters_row = $voters_query->fetch_array();
		$voters_username = $voters_row['firstname']." ".$voters_row['lastname'];
	
?>