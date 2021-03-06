<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<!--Import materialize.css-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/salvattore.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/system_grid.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.css"  media="screen,projection" type="text/css"/>
	
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body onload="load.load()" style="background-color:#f1f1f1">
	<div id="data-container"></div>
	<div id="loading-div">
		<div style="position:absolute; margin:auto; top:0; bottom:0; left:0; right:0; width:100px; height:100px">
			<img src="<?php echo base_url();?>assets/pictures/logo_blue.svg" style="max-width:100px;">
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>	
	<script type="text/javascript">

 var load = load || {};

 (function($, load) {

 	"use strict";

 	var
 	loadingId = "#loading-div",
 	container = "#data-container";

 	load.load = function() {

 		var url = "<?php echo base_url();?>ajax/medpart";

 		$(loadingId).show();

 		$.ajax({
 			url: url,
 			success: function(response) {
 				if (!response || response.trim() == "NONE") {
 					$(loadingId).text("No more entries to load!");
 					return;
 				}
 				appendContests(response);
 			},
 			error: function(response) {
 				$(loadingId).text("Sorry, there was some error with the request. Please refresh the page.");
 			}
 		});
 	};

 	var appendContests = function(response) {
 		$(loadingId).fadeOut();
 		$(response).appendTo($(container));
 	};

 })(jQuery, load);
 </script>
</body>
</html>
