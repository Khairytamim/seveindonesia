	<div class="row">
		<!-- LIST THUMB-->
		<div id="timeline" data-columns style="overflow:hidden">
			<?php $i=0; foreach ($h->result() as $row){$i+=1;?>
			<?php $id_ = substr($row->id, 3, 11);?>
			<div class="item">
				<!-- album 1 -->
				<div class="card lala" >
					<a onclick="contentload.load('<?php echo $row->id;?>');" href="#content<?php echo $id_;?>" class="modal-trigger"><div class="card-image" >
						<img class="activator" src="<?php echo base_url();?>assets/assets/<?php echo $row->id;?>.jpg">
					</div>
				</a>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4"><?php echo $row->title;?></span>
						<p>
							<a href="#" class="grey-text"><img src="<?php echo base_url();?>assets/pictures/love.svg" class="tiny"/><?php echo $row->like;?></a> 
							<a href="#" class="grey-text"><img src="<?php echo base_url();?>assets/pictures/share.svg" class="tiny"/><?php echo $row->share;?></a>
							<a href="#" class="grey-text"><img src="<?php echo base_url();?>assets/pictures/star.svg" class="tiny right"/></a>
							
						</p>
					</div>
					<div class="divider"></div>
					<div class="card-content">
							<div class=row>
								<div class="col s3">
							<img class="profil circle red left" src="<?php echo base_url();?>assets/assets/yuna.jpg" style="max-width:100%" alt="">
							</div>
							<div class="col s9">
								<p class="ava_title grey-text">Bromo Comunity</p>
								<p class="ava_title grey-text"><img src="<?php echo base_url();?>assets/pictures/love.svg" class="tiny"/>follow</p>
						</div>
						</div>
					</div>
				</div>
			<div id="content<?php echo $id_?>" class="modal">
			</div>
			</div>
			<?php } ?>
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


	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		<a class="btn-floating btn-large red " >
			<i class="large material-icons">add</i>
		</a>
		<ul>
			<li><a href="#content00000000018" class="btn-floating red modal-trigger"><i class="material-icons">insert_chart</i></i></a></li>
			<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
		</ul>
	</div>
	<!--Import jQuery before materialize.js-->
	<script src="<?php echo base_url();?>assets/js/salvattore.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.js"></script>
<script type="text/javascript">
var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
       // downscroll code
       $('.navbar-fixed').fadeOut();
   } else {
      // upscroll code
      $('.navbar-fixed').fadeIn();
   }
   lastScrollTop = st;
});
</script>
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