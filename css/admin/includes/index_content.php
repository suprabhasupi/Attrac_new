<?php
	session_start();
	$msg="";
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$sql="select * from login where Username='{$username}' and Password='{$password}'";
		$result=mysqli_query($con,$sql) or die(mysqli_error($con));
		
		if(mysqli_num_rows($result) >=1)
		{
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				if($row['Priority']>=9)
				{
					$date=date("d-m-Y H:i:sa");
					$_SESSION['username']=$row['Username'];
					$count=$row['Count'];
					$count++;
					$sql="update login set Last_login='{$date}' , Count='{$count}' where Username='{$username}'";
					mysqli_query($con,$sql) or die(mysqli_error($con));
					header("location:home.php");
					exit();
				}
			}
		}
		else
		{
			$msg.="Username or Password Mismatch";
		}
	}

?>

<body>


<div class="container" >
<h3>Login</h3>
  <form action="index.php" method="post" class="form-horizontal" role="form" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
      </div>
    </div>
      <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-2">
		<input type="submit" value="submit" name="submit" class="btn btn-info"/>
      </div>
    </div>
  </form>
</div>



<?php echo $msg;?>
