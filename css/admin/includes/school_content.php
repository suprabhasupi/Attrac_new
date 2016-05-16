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
	
}
	
	
?>

<body>


<div class="container">

<h3>Add School Details</h3>
  <form action="school.php" method="post" class="form-horizontal" role="form" >
    <div class="col-sm-6" >
	<div class="form-group">
      <label class="control-label col-sm-2" >School Id :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="school_id" name="school_id" placeholder="Enter School Id" required />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="">School Name:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="school_name" name="school_name" placeholder="Enter School Name" required /> 
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" >Address:</label>
      <div class="col-sm-6">          
        <textarea name="address" id="address" cols="5" rows="5"  class="form-control" placeholder="Enter School Address" required></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="">Village:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="village" name="village" placeholder="Enter Village Name" required /> 
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="">Taluk:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="taluk" name="taluk" placeholder="Enter Taluk Name" required /> 
      </div>
    </div>
	
	</div> <!-- first div-->
	
	<div class="col-sm-6">
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="">District:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="district" name="district" placeholder="Enter District Name" required /> 
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="">Date of Establishment:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="doe" name="doe" placeholder="Enter Date of establisment" required /> 
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="">HM Name:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="hm_name" name="hm_name" placeholder="Enter Head Master Name" required /> 
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="">Phone:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required /> 
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="">Email:</label>
      <div class="col-sm-6">          
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required /> 
      </div>
    </div>
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="">Education up to:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="education" name="education" placeholder="Enter Education" required /> 
      </div>
    </div>
	
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-2">
		<input type="submit" value="Save" name="save" class="btn btn-info" />        
      </div>
    </div>
	
	</div>
	
  </form>

  <?php echo $msg;?>
</div> <!-- Container -->

</div>