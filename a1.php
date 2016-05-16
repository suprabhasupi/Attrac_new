<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attrac Biometric</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
html, body {
    width  : 100%;
    height : 100%;
}
#overlay-back { 
    position   : absolute; 
    top        : 0; 
    left       : 0; 
    width      : 100%; 
    height     : 150%; 
    background : #000; 
    opacity    : 0.6; 
    filter     : alpha(opacity=60); 
    z-index    : 5;
    display    : none;
} 
 
#overlay { 
    position : absolute; 
    top      : 10%; 
    left     : 25%; 
    width    : 100%; 
    height   : 100%; 
    z-index  : 10;
    display  : none;
} 
.hi{
   height:300px;width:50%;background-color:white;box-shadow: 5px 5px 5px #666633; 
}
</style>


</head>
<body>

<a id="some-button" href="#">click me</a> 
<div id="overlay-back"></div> 
<div id="overlay" style="">
  
  <div class="hi hidden" id="hi" style="">
    <center>
      OM
    </center>
  </div>  


</div> 



</body>
<script type="text/javascript">
$('#some-button').on('click', function () { 
    $("#hi").removeClass('hidden');
    $('#overlay, #overlay-back').fadeIn(500); 
});


function call()
{
$("#hi").removeClass('hidden');
}
</script>
</html>