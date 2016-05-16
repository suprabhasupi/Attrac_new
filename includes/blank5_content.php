<div class="row col-md-12 ">&nbsp;</div>
<div class="row col-md-12 ">&nbsp;</div>
<div class="row col-md-12 col-xs-12 col-sm-12">
	
	<div class="col-md-1 col-xs-1 col-sm-1"></div>

	
	<div class="col-md-10 col-xs-10 col-sm-10">
		<div class="col-md-12 col-xs-12 col-sm-12 form-box">
		
		<div class="row col-md-offset-12 ">&nbsp;</div>
			<div class="col-md-12 col-xs-12 col-sm-12" >
                 <div class="col-md-3 col-sm-4 col-xs-2">&nbsp;&nbsp;</div> 		
			     <div class=" col-md-6 col-sm-12 col-xs-12 text-center user-master tregular f24" >&nbsp; Add Questions For:
						<input type="text" value="" class="course_txt" style="width:60%;" writeonly/>
						<input type="text" value="" class="course_txt" style="width:60%;" writeonly/>
			     </div>
				 <div class="col-md-3 col-sm-4 col-xs-2">&nbsp;</div>
		    </div>
		    <div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
		    <div class="col-md-12 text-center">
                      
                        <p> Question added.</p>
                        <p>Total Marks. </p>
						
						</div>
						 
						  <div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div>
		   		<div class="col-md-12">
                        <div class="col-md-4 col-sm-4 col-xs-2">&nbsp;</div>
                       


                        <div class="col-md-4 col-sm-4 col-xs-2 addques_box" onclick="checkbox_check()">
                        <a href="#myModal">
						<i class="fa fa-plus-circle text-center fa-lg center-block" aria-hidden="true">&nbsp; &nbsp;<span class="addques">Add Question</span></i></a>
						<p id="error">Please check any one of the box below</p>

<!-- <p class="alert alert-danger error">
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </p> -->


						</div>
						<div class="col-md-4 col-sm-4 col-xs-2">&nbsp;</div>
				</div>
						    
			
			
		
		    <form action="#" method="post" class="form-horizontal form-content" role="form" >
	              
                      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        
                      	<p>Question. : &nbsp; &nbsp; <input type="text" value="" class="course_txt" style="width:70%;" writeonly/>
                      	</p>	
							<div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
							<div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
                      	<div class="col-md-6">
                      	<form role="form">
						    <div class="radio text-center text-center">
						      <label><input type="radio" name="optradio" id="r1">Option 1</label>
						    </div>
						    <div class="radio text-center">
						      <label><input type="radio" name="optradio" id="r2">Option 2</label>
						    </div>
					<!-- </form> -->
						</div>
						<div class="col-md-6">

								<!-- <form role="form"> -->
						    <div class="radio text-center">
						      <label><input type="radio" name="optradio" id="r3">Option 3</label>
						    </div>
						    <div class="radio text-center">
						      <label><input type="radio" name="optradio" id="r4">Option 4</label>
						    </div>
						</form>
						</div> 
						
						<div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div>
						<div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div>

				<p>Add Description:&nbsp;&nbsp;<input type="text" value="" class="course_txt text-center" style="width:70%;" writeonly/></p>

					<div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div>
					<p>Mark for the Question:&nbsp;<input type="text" value="" class="course_txt text-center" style="width:5%;" writeonly/></p>
 
					<div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div>

					<script>
function checkbox_check() { 
    //checking assigning values of check box to c1,c2,c3,c4
    var r1 = document.getElementById('r1').checked, // Checkbox 0 
        r2 = document.getElementById("r2").checked, // Checkbox 1
        r3 = document.getElementById('r3').checked, // Checkbox 2
        r4 = document.getElementById('r4').checked; // Checkbox 3

    // yaha pe condition check kr rahe hain ki kya sabhi check box unchecked hain ??
    if (r1 == false && r2 == false && r3 == false && r4 == false) {
        // agar unchecked hain to fir error msg kaa display "none" se block me change kr diye
        // document.getElementById("myModal").style.display = "none";
        document.getElementById("error").style.display = "block";
    } else {
        document.getElementById("error").style.display = "none";
        $('#myModal').modal('show');
    }



}
// $(".addques_box").click(function(){
// 	// alert("working");
//         //checking assigning values of check box to c1,c2,c3,c4
//     var r1 = document.getElementById('r1').checked, // Checkbox 0 
//         r2 = document.getElementById("r2").checked, // Checkbox 1
//         r3 = document.getElementById('r3').checked, // Checkbox 2
//         r4 = document.getElementById('r4').checked; // Checkbox 3
//         // console.log(c0)

    
//     if (r1 == false && r2 == false && r3 == false && r4 == false) {
        
//         document.getElementById("error").style.display = "block";
//     } else {
//         document.getElementById("error").style.display = "none";
//     }


// });
</script>
						



					<div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div>
					<div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div>

					        
					 
				
					</div>

				  

		     </form>
			 






			 
		 	<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
		 	<div id="myModal" class="modal fade" role="dialog">
  			<div class="modal-dialog">
			<!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Modal Header</h4>
					      </div>
					      <div class="modal-body">
					      <div class="col-md-12 text-center">
                      
                        <p> Question added.</p>
                        <p>Total Marks. </p>
						
						</div>

					      	<p>Question. : &nbsp; &nbsp; <input type="text" value="" class="course_txt" style="width:70%;" writeonly/>
                      	</p>	
							<div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
							<div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
                      	<div class="col-md-6">
                      	<form role="form">
						    <div class="radio text-center text-center">
						      <label><input type="radio" name="optradio" id="r1">Option 1</label>
						    </div>
						    <div class="radio text-center">
						      <label><input type="radio" name="optradio" id="r2">Option 2</label>
						    </div>
					<!-- </form> -->
						</div>
						<div class="col-md-6">

								<!-- <form role="form"> -->
						    <div class="radio text-center">
						      <label><input type="radio" name="optradio" id="r3">Option 3</label>
						    </div>
						    <div class="radio text-center">
						      <label><input type="radio" name="optradio" id="r4">Option 4</label>
						    </div>
						</form>
						</div> 
						
						<div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div>
						<div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div>

				<p>Add Description:&nbsp;&nbsp;<input type="text" value="" class="course_txt text-center" style="width:70%;" writeonly/>
					<div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div>
					<p>Mark for the Question:&nbsp;<input type="text" value="" class="course_txt text-center" style="width:5%;" writeonly/></p>
 
					<div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div>


					
					      </div>

					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>

					  </div>
					</div>










			   			 
			<div class="row col-md-offset-12 ">&nbsp;</div>
		</div>
		<div class="row col-md-12 ">&nbsp;</div>
			 <div class="row col-md-12 ">&nbsp;</div>
		 <div class="row col-md-12 ">&nbsp;</div> 
	</div>

</div>




</div> 