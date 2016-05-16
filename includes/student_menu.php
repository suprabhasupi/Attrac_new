
 <div id="wrapper">
        <!-- Sidebar -->
       <!-- <div id ="sidebar-wrapper-top"></div> -->
 <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

                <li class="active">
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user fa-stack-1x menus_icons"></i></span>Profile</a>
                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user fa-stack-1x menus_icons"></i></span>info</a></li>
                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user fa-stack-1x menus_icons"></i></span>info2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-eye fa-stack-1x menus_icons"></i></span> View Attendance</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-eye fa-stack-1x menus_icons"></i></span>1st internal</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-eye fa-stack-1x menus_icons"></i></span>2nd internal</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-desktop fa-stack-1x menus_icons"></i></span>Online Exam</a>
                     <ul class="nav-pills nav-stacked" style="list-style-type:none;">

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-desktop fa-stack-1x menus_icons"></i></span>Internal-1 </a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-desktop fa-stack-1x menus_icons"></i></span>Internal-2</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-comments fa-stack-1x menus_icons"></i></span>Feedback</a>
                     <ul class="nav-pills nav-stacked" style="list-style-type:none;">

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-comments fa-stack-1x menus_icons"></i></span>fb List</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-comments fa-stack-1x menus_icons"></i></span>Fb List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-floppy-o fa-stack-1x menus_icons"></i></span>Marks Memo</a>
                     <ul class="nav-pills nav-stacked" style="list-style-type:none;">

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-upload fa-stack-1x menus_icons"></i></span>View Exam</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-eye fa-stack-1x menus_icons"></i></span>View Results</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-paper-plane fa-stack-1x menus_icons"></i></span>Previos Question Paper</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-book fa-stack-1x menus_icons"></i></span>Interanl1</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-paper-plane fa-stack-1x menus_icons"></i></span>Internal2</a></li>
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
