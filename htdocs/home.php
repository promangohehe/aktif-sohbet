<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }
  .container {
    margin-top: 3%;
    width: 60%;
    background-color: #26262b9e;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #673AB7;
	}
	.display-chat{
		height:300px;
		background-color:#424549;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #424549;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>

<div class="container">
  <center><h2>OOOOO <span style="color:#424549;"><?php echo $_SESSION['name']; ?> !</span></h2>
  <br><br>
	<label>buyur gardaş hoşgelmişen</label><br>
	<br><br>
	<a href="chatpage.php" class="btn btn-primary">sohbeti aç</a>
  
</div>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>