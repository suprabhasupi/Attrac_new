<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
	die();
}
$msg="";
if(isset($_POST['save']))
{
	
	$username=$_POST['username'];
	$check="select * from login where Username='{$username}'";
	$result=mysqli_query($con,$check);
	if(mysqli_num_rows($result)>=1)
	{
		$msg.="Username is already present";
		
	}
	$password=md5($_POST['password']);
	$priority=$_POST['priority'];
	
	$sql="insert into login(Username,Password,Priority) values('{$username}','{$password}','{$priority}')";
	if(mysqli_query($con,$sql)) 
		$msg.="Success!!";
}
	
	
?>

<body>


<div class="container-fluid">

<h3>Add Users</h3>
  <form action="home.php" method="post" class="form-horizontal" role="form" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required /> 
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="priority">Priority:</label>
      <div class="col-sm-4">          
        <input type="number" class="form-control" id="priority" name="priority" placeholder="Enter priority from 1 to 10" pattern="[0-9]{1}" required />
      </div>
    </div>
    
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-2">
		<input type="submit" value="Save" name="save" class="btn btn-info" />        
      </div>
    </div>
  </form>

  <?php echo $msg;?>
</div> <!-- Container -->

</div>