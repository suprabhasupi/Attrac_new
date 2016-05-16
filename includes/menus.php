
 <div id="wrapper">
        <!-- Sidebar -->
       <!-- <div id ="sidebar-wrapper-top"></div> -->
 <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

                <li class="active">
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x menus_icons"></i></span>Dashboard</a>
                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="#">link1</a></li>
                        <li><a href="#">link2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x menus_icons"></i></span> Shortcut</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x menus_icons"></i></span>link1</a></li>

                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x menus_icons"></i></span>link2</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x menus_icons"></i></span>Overview</a>
                </li>
                <li>
                    <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x menus_icons"></i></span>Events</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x menus_icons"></i></span>About</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x menus_icons"></i></span>Services</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x menus_icons"></i></span>Contact</a>
                </li>
            </ul>
        </div>


<script>
    $(document).ready(function(){
    $(".mainmenu").click(function(){
        
           $("#sidebar-wrapper").show();
    });
});
    

 //    $( window ).scroll(function() {
 //         // alert($("#sidebar-wrapper").scrollTop() + " px");
 //        var sidebar = $("body");
 // var sidebar_location=sidebar.scrollTop();
 // console.log(sidebar_location);
 // if (sidebar_location>=60){
 //    console.log("under if condition");
 // $("#sidebar-wrapper").css("position","fixed");
 //  $("#sidebar-wrapper").css("top","0px");
 // }else{
 //    console.log("under ELSE condition")
 //    $("#sidebar-wrapper").css("position","fixed");
 //     $("#sidebar-wrapper").css("top","-60px");
 // }



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
// else{
//     // console.log("under ELSE condition")
//     $("#sidebar-wrapper").css("position","fixed");
//     var top = 60-sidebar.scrollTop()+"px";
//     console.log(top);
//      $("#sidebar-wrapper").css("top",top);
     
//  }
   
});


// $(document).ready(function(){
//   var h=$(window).height();
//   alert(h);
// }
// );




 // $(window).scroll(function(){
 // var div_top = $('#sidebar-wrapper').offset().top;
 //      if ($(this).scrollTop() > div_top) {
 //          $('#sidebar-wrapper').addClass('fixed');
 //          // $('#sidebar-wrapper').removeClass('abs');
 //      } else {
 //          $('#sidebar-wrapper').removeClass('fixed');
 //          // $('#sidebar-wrapper').addClass('abs');
 //      }
 //   });
 
// $(window).scroll(function(){
//     if($(document).scrollTop()>500){
//          $("#sidebar-wrapper").css("margin-top","4%");
//     }

// });

</script>


<!-- https://jsfiddle.net/livibetter/HV9HM/ -->

<!-- http://jsfiddle.net/FyEGN/2/ -->