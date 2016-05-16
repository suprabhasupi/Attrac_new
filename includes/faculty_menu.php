
 <div id="wrapper">
        <!-- Sidebar -->
       <!-- <div id ="sidebar-wrapper-top"></div> -->
 <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

                <li class="active">
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user fa-stack-1x menus_icons"></i></span>Profile</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-eye fa-stack-1x menus_icons"></i></span> View Time Table</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x menus_icons"></i></span>Take Attendance</a>
                </li>
                <li>
                    <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-exchange fa-stack-1x menus_icons"></i></span>Swap Class</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-book fa-stack-1x menus_icons"></i></span>Take Class</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list fa-stack-1x menus_icons"></i></span>Attendance Report</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-comments fa-stack-1x menus_icons"></i></span>Feedbacks</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-desktop fa-stack-1x menus_icons"></i></span>Online Examination</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-floppy-o fa-stack-1x menus_icons"></i></span>Marks Memo</a>
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
