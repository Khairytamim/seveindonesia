	<h3 align="center"><b>MEDIA PARTNER</b></h3>
	<div class="row">
		<div class="col s6 m3 l2">
			<div class="card" >
				<a href="#content" class="modal-trigger"><div class="card-image" >
					<img class="activator" src="<?php echo base_url();?>assets/assets/.jpg">
				</div>
			</a>
			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">Lorem Ipsum</span>
			</div>
		</div>
	</div>
</div>
<div id="data-container">

</div>
<div class="margin-top"></div>
<div class="margin-top"></div>
<div class="row">
	<div class="col s2">
		<p></p>
	</div>
	<div class="col s8">
		<p id="loading-div">
			<div class="progress">
				<div class="indeterminate"></div>
			</div>
		</p>
	</div>
	<div class="col s2">
		<p></p>
	</div>
</div>

<!--Import jQuery before materialize.js-->
<script src="<?php echo base_url();?>assets/js/salvattore.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('body').css('background-color','#f1f1f1');})
</script>
<script type="text/javascript">
var contentload = contentload || {};
(function($, contentload) {
	"use strict";
	var container = "";
	contentload.load = function(m) {
		container = "#content"+m.substr(3,11);
		var url = "<?php echo base_url();?>show_content/card/" + m.substr(3,11);
		$.ajax({
			url: url,
			success: function(response) {
				if (!response || response.trim() == "NONE") {
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
		$(response).appendTo($(container));
	};
})(jQuery, contentload);
</script>

<script type="text/javascript">

/**
 * @author Shaumik Daityari
 * @copyright Copyright © 2013 All rights reserved.
 */

 var lazyload = lazyload || {};

 (function($, lazyload) {

 	"use strict";

 	var page = 2,
 	buttonId = "#button-more",
 	loadingId = "#loading-div",
 	container = "#data-container";

 	lazyload.load = function() {

 		var url = "<?php echo base_url();?>home/card/" + page;

 		$(buttonId).hide();
 		$(loadingId).show();

 		$.ajax({
 			url: url,
 			success: function(response) {
 				if (!response || response.trim() == "NONE") {
 					$(buttonId).fadeOut();
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
 		var id = $(buttonId);

 		$(buttonId).show();
 		$(loadingId).hide();

 		$(response).appendTo($(container));
 		page += 1;
 	};

 })(jQuery, lazyload);
 </script>

 <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
 <script>
 lala = new WOW(
 {
 	boxClass:     'lala', 
 	animateClass: 'animated',
 	offset:       0,
 	callback:     function(box) {
 		//console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
 		lazyload.load();
 	}
 }
 );
 lala.init();
 </script>