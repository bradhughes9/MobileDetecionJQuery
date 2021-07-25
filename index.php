<!DOCTYPE html>
<html>
		
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>lab11</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<?php include("mobileesp.php"); ?>

</head>

<body style="background-color: rgb(160,40,40);">
<div class="text-center" id="page-container" style="  position: relative; min-height: 100vh;">
<div id="content-wrap" style=" padding-bottom: 2.5rem; ">
	<?php
	

//Instantiate the object to do our testing with.
$uagent_obj = new uagent_info();


//Detect Ios Devices
if (($uagent_obj->DetectIos() == $uagent_obj->true) ||
($uagent_obj->DetectIpad() == $uagent_obj->true))
   { print('<h1 class="text-center">Bradley Hughes Mobile Detection Services</h1>
		<div class="container text-center">
			
		</div>
    <h1 class="text-center">This page will detect what device you are viewing with.</h1>
		<div class="container text-center">
			<h2 class="text-center">You are using an Ios Device.
			</h2>
			<img style="max-width: 100%;
height: auto;" src="apple.png" style=">
		</div>'); }
   
   
//Detect Android Devices
else if ($uagent_obj->DetectAndroid() == $uagent_obj->true)
   { print('<h1 class="text-center">Bradley Hughes Mobile Detection Services</h1>
		<div class="container text-center">
			
		</div>
    <h1 class="text-center">This page will detect what device you are viewing with.</h1>
		<div class="container text-center">
			<h2 class="text-center">You are using an Android.
			</h2>
			<img style="max-width: 100%;
height: auto;" src="android.png">
		</div>'); }
   
   
//Detect All Other Mobile Devices
else if ($uagent_obj->DetectTierOtherPhones() == $uagent_obj->true)
   { print('<h1 class="text-center">Bradley Hughes Mobile Detection Services</h1>
		<div class="container text-center">
			
		</div>
    <h1 class="text-center">This page will detect what device you are viewing with.</h1>
		<div class="container text-center">
			<h2 class="text-center">You are using a mobile device that is not android or Ios.
			</h2>
			<img style="max-width: 100%;
height: auto;" src="assets/img/devices.jpg">
		</div>'); }
   //Detect PC's
   else 
	   { print('<h1 class="text-center">Bradley Hughes Mobile Detection Services</h1>
		<div class="container text-center">
			
		</div>
    <h1 class="text-center">This page will detect what device you are viewing with.</h1>
		<div class="container text-center">
			<h2 class="text-center">You are using a PC.
			</h2>
			<img style="max-width: 100%;
height: auto;" src="pc.png">
		</div>'); }

?>
   </div>
   <footer id="footer" style=" position: absolute;
  bottom: 0;
  width: 100%;
  height: 2.5rem; text-align:center;"> <p> &copy  www.hand-interactive.com and Bradley Hughes</p>
	  </footer>
 </div>
     <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>