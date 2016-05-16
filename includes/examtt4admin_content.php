<div class="row col-md-12 ">&nbsp;</div>
<div class="row col-md-12 ">&nbsp;</div>
<div class="row col-md-12 col-xs-12 col-sm-12">
	
	<div class="col-md-1 col-xs-1 col-sm-1"></div>

	
	<div class="col-md-10 col-xs-10 col-sm-10">
		<div class="col-md-12 col-xs-12 col-sm-12 form-box">
		
		<div class="row col-md-offset-12 ">&nbsp;</div>
			<div class="col-md-12 col-xs-12 col-sm-12" >
			
               		
			     <div class=" col-md-11 col-sm-4 col-xs-8 text-center user-master tregular f24" style="left:5%;" >&nbsp;Edit Time Table
			     </div>
			 
		
		    <form action="#" method="post" class="form-horizontal form-content" role="form" >
	              
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 font">
                   <div class="form-group">
					  <label for="sel1">Select Exam &nbsp;  &nbsp;  &nbsp;  &nbsp;
					  <select class="form-group dropdown_changes" id="sel1">
					    <option>Internal 1</option>
					    <option>Internal 2</option>
					    <option>Internal 3</option>
					  </select></label>
				   </div>    
					      <div class="col-md-6">
					      	    <form class="form-horizontal" role="form">
							    
							    <div class="form-group">
							  <label for="sel1">Semester: &nbsp;  &nbsp;  &nbsp;  &nbsp;
							  <select class="form-group dropdown_changes" id="sel1">
							    <option>Semester1</option>
							    <option>Semester2</option>
							    <option>Semester3</option>
							    <option>Semester4</option>
							  </select></label>
						   </div>   
							  </form>
					      </div>

					      <div class="col-md-6">
					      	   <form class="form-horizontal" role="form">
							     <div class="form-group">  &nbsp;&nbsp;&nbsp; 
							  <label for="sel1">Section: &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
							  <select class="form-group dropdown_changes" id="sel1">
							  <option>Select</option>
							    <option>A</option>
							    <option>B</option>
							    <option>C</option>
							    <option>D</option>
							  </select></label>
						   </div> 
							  </form>

							  
							        
							      
					      </div>
								<div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
								<!-- <div class="col-md-12 col-sm-4 col-xs-2">&nbsp;</div> -->
					<div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>


						   <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 table-responsive">
					         
					         
		         <table class=" col-md-12 col-sm-12 table table-hover table-condensed tbl font">
							<tbody class="tregular"> 	 	 	 		
						  <tr class="line">
							<td> <label for="sel2">Subject</label></td>
							<td>Date</td>
							<td>Time</td>
							<td>Duration</td>
							<td></td>
						  </tr>
						
                           <tr>
							<td> <select class="form-group dropdown_changes" id="sel2">
							   <option>Select Subject</option>
							    <option>Mathematics</option>
							    <option>English</option>
							    <option>Physics</option>
							    <option>Computer</option>
							  </select></td>
							<td><input type="Date" class="form-control course_txt"></td>
							<td><input type="time" class="form-control time_text course_txt"></td>
							<td><input type="Duration" class="form-control course_txt" placeholder="mins"></td>
							<td><button type="button" class="btn btn-default center-block btn_visited btn_style" data-toggle="modal" data-target="#myModal">Edit</button></td>
						   </tr>

						   <tr>
							<td> <select class="form-group dropdown_changes" id="sel2">
							   <option>Select Subject</option>
							    <option>Mathematics</option>
							    <option>English</option>
							    <option>Physics</option>
							    <option>Computer</option>
							  </select></td>
							<td><input type="Date" class="form-control course_txt"></td>
							<td><input type="time" class="form-control time_text course_txt"></td>
							<td><input type="Duration" class="form-control course_txt" placeholder="mins"></td>
							<td><button type="button" class="btn btn-default center-block btn_visited btn_style" data-toggle="modal" data-target="#myModal">Edit</button></td>
						   </tr>

						</tbody>						
					</table>				
			</div>

			


			  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog examtt_modal">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title tregular">Edit Time Table</h4>
        </div>
        <div class="modal-body">
          
        	 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                  
                    <div class="col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
                    <div class="col-md-6">
                    	 <div class="form-group">
					  <label for="sel1">Name of Exam &nbsp;  &nbsp;  &nbsp;  &nbsp;
					  <select class="form-group dropdown_changes" id="sel1">
					  <option>Select Exam:</option>
					    <option>Internal 1</option>
					    <option>Internal 2</option>
					    <option>Internal 3</option>
					  </select></label>
				   </div>  

						  <div class="form-group dropbox"> &nbsp; &nbsp; 
							  <label for="sel1">Subject: &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;
							  <select class="form-group dropdown_changes" id="sel1">
							   <option>Select Subject</option>
							    <option>Mathematics</option>
							    <option>English</option>
							    <option>Physics</option>
							    <option>Computer</option>
							  </select></label>
						   </div>   
							   
						       <form class="form-horizontal" role="form">
							    <div class="form-group">
							      <label class="control-label col-sm-2">Date: </label>
							      <div class="col-sm-10 col-md-5">
							        <input type="Date" class="form-control course_txt" style="width: 8.5em;
    margin-left: 2em;">
							      </div>
							    </div>
							    </form>

							    <div class="form-group">
							      <label class="control-label col-sm-2" for="time">Time:</label>
							      <div class="col-sm-10 col-md-5">          
							        <input type="time" class="form-control time_text course_txt" style="width: 8.6em;
    margin-left: 1.9em;">
							      </div>
							    </div>	

					      </div>   
					      <div class="col-md-6">
					      	 <div class="form-group">
					  <label for="sel1">Name of Faculty &nbsp;  &nbsp;  &nbsp;  &nbsp;
					  <select class="form-group dropdown_changes" id="sel1">
					  <option>Select Name:</option>
					    <option>Jishnu</option>
					    <option>ganraj</option>
					    <option>raj</option>
					  </select></label>
				   </div>  

					      	    <form class="form-horizontal" role="form">
							    
							    <div class="form-group">
							  <label for="sel1" class="sem">Semester: &nbsp;  &nbsp;  &nbsp;
							  <select class="form-group dropdown_changes" id="sel1">
							  <option>Select Semester</option>
							    <option>Semester1</option>
							    <option>Semester2</option>
							    <option>Semester3</option>
							    <option>Semester4</option>
							  </select></label>
						   </div>   

						    <div class="form-group">  &nbsp;&nbsp;&nbsp; 
							  <label for="sel1">Section: &nbsp;  &nbsp;  &nbsp;  &nbsp;  
							  <select class="form-group dropdown_changes" id="sel1">
							  <option>Select Section</option>
							    <option>A</option>
							    <option>B</option>
							    <option>C</option>
							    <option>D</option>
							  </select></label>
						   </div> 

						    <div class="form-group">
							      <label class="control-label col-sm-2" for="duration">Duration:</label>
							      <div class="col-sm-10 col-md-5 col-md-offset-2">          
							        <input type="Duration" class="form-control course_txt" placeholder="mins">
							      </div>
							    </div>	

							  
							  </form>


					      </div>
					      
					
					</div>







        </div>
        <div class="modal-footer examtt_footer">
          <button type="button" class="btn btn-default btn_visited btn_style" data-dismiss="modal">Save</button>
        </div>
      </div>
      
    </div>
  </div>





					</div>

				  





		    </div>
		 				
				
 <div class="row col-md-12 ">&nbsp;</div>
  <div class="row col-md-offset-12 ">&nbsp;</div>
 <div class="row col-md-12 ">&nbsp;</div>
 <div class="row col-md-12 ">&nbsp;</div>
 
	<script>
				$(document).ready(function(){
				    $(".btn_visited").click(function(){
				        $(this).css("background-color", "#00bfa5");
				    });
				});
</script>
		
	
		
	</div>

<div class="row col-md-12 ">&nbsp;</div>
 <div class="row col-md-12 ">&nbsp;</div>
 
	
</div>




</div> <!-- Container class-->
</div>