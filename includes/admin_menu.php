
 <div id="wrapper">
        <!-- Sidebar -->
       <!-- <div id ="sidebar-wrapper-top"></div> -->
 <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

                <li class="active">
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-plus-circle fa-stack-1x menus_icons"></i></span>ADD Sem, Sec, Period</a>
                       <!-- <ul class="nav-pills nav-stacked" style="list-style-type:none;"> -->
                        <!-- <li><a href="#">link1</a></li> -->
                        <!-- <li><a href="#">link2</a></li> -->
                    <!-- </ul> -->
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x menus_icons"></i></span> Uploads</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-upload fa-stack-1x menus_icons"></i></span>Upload Student</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-upload fa-stack-1x menus_icons"></i></span>Upload Faculty</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-upload fa-stack-1x menus_icons"></i></span>Upload Subject</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-eye fa-stack-1x menus_icons"></i></span>View Lists</a>
                     <ul class="nav-pills nav-stacked" style="list-style-type:none;">

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list fa-stack-1x menus_icons"></i></span>Student List</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list fa-stack-1x menus_icons"></i></span>Faculty List</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list fa-stack-1x menus_icons"></i></span>Subject List</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-pencil-square-o fa-stack-1x menus_icons"></i></span>Edit Lists</a>
                     <ul class="nav-pills nav-stacked" style="list-style-type:none;">

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list fa-stack-1x menus_icons"></i></span>Student List</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list fa-stack-1x menus_icons"></i></span>Faculty List</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list fa-stack-1x menus_icons"></i></span>Subject List</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-clock-o fa-stack-1x menus_icons"></i></span>Time Table</a>
                     <ul class="nav-pills nav-stacked" style="list-style-type:none;">

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-upload fa-stack-1x menus_icons"></i></span>Upload Time Table</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-eye fa-stack-1x menus_icons"></i></span>View Time Table</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-pencil fa-stack-1x menus_icons"></i></span>Edit Subject</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-floppy-o fa-stack-1x menus_icons"></i></span>Marks Memo</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-book fa-stack-1x menus_icons"></i></span>Create Exam</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-eye fa-stack-1x menus_icons"></i></span>View Exam</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-pencil fa-stack-1x menus_icons"></i></span>Edit/Delete Exam</a></li>

                    </ul>
                </li>
            </ul>
        </div>


<script>
    $(document).ready(function(){
    $(".mainmenu").click(function(){
        
           $("#sidebar-wrapper").show();
    });
});
    

  $( window ).scroll(function() {
         // alert($("#sidebar-wrapper").scrollTop() + " px");
        var sidebar = $("body");
 var sidebar_location=sidebar.scrollTop();
 // console.log(sidebar_location);
 if (sidebar_location>60){
    // console.log("under if condition");
 $("#sidebar-wrapper").css("position","fixed");
  $("#sidebar-wrapper").css("top","60px");
 }
 else if(sidebar_location>5){
     $("#sidebar-wrapper").css("position","fixed");
     // alert('alert');
    // $("#sidebar-wrapper").css("margin-top","4%");
}

});



</script>
