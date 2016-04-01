<video autoplay loop 
style="position: fixed;
top: 50%;
left: 50%;
min-width: 100%;
min-height: 100%;
width: auto;
height: auto;
z-index: -100;
-webkit-transform: translateX(-50%) translateY(-50%);
transform: translateX(-50%) translateY(-50%);
background: #fff;
background-size: cover;">
  <source src="<?php echo base_url();?>assets/video/mountain.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
<div class="row">
	<div class="col s12 m12 l12">

		<section class="cd-intro" style="min-height:100vh">
			<div class="center">
				<img src="<?php echo base_url();?>assets/pictures/komoland_white_landscape.svg" style="max-width:80%; margin-top:50px;margin-left:auto; margin-right:auto">
			</div>
			<h2 class="white-text cd-headline rotate-1 center hide-on-med-and-down">
				<span>You can see the amazing</span>
				<span class="cd-words-wrapper">
					<b class="is-visible" style="border-bottom:2px dashed #fff">Waterfall</b>
					<b style="border-bottom:2px dashed #fff">Beach</b>
					<b style="border-bottom:2px dashed #fff">Mountain</b>
					<b style="border-bottom:2px dashed #fff">Place</b>
				</span>
			</h2>

			<h5 class="white-text center">
				Find The Hidden Paradise NOW!
			</h5>
			<br>
			<div class="center">
				<a class="waves-effect waves-light btn margin-top margin-bottom blue">login / register</a>
			</div>

		</section>
	</div>
	<div class="col s12 m4 l3" style="display:none">
		<div class="card">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s3"><a class="active" href="#test1">LOGIN</a></li>
					<li class="tab col s3"><a href="#test2">REGISTER</a></li>
				</ul>
			</div>
			<div id="test1" class="col s12">
				<div class="divider"></div>
				<div class="card-content">
					<div class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<i class="mdi-content-mail prefix"></i>
									<input placeholder="Email" id="icon_prefix" type="email" class="validate">
								</div>
								<div class="input-field col s12">
									<i class="mdi-action-lock prefix"></i>
									<input placeholder="Password" id="icon_telephone" type="password" class="validate">
								</div>

								<div class="center">
									<a class="waves-effect waves-light btn margin-top margin-bottom blue">login</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="test2" class="col s12">
				<div class="divider"></div>
				<div class="card-content">
					<div class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<i id="username_create_icon" class="mdi-action-account-circle prefix"></i>
									<input placeholder="User Name" id="username_create" type="text">
									<p id="username_create_verify" style="margin-bottom:15px; margin-top:-15px; margin-left:45px; font-size:12px"></p>
								</div>
								<div class="input-field col s12">
									<i id="email_create_icon" class="mdi-content-mail prefix"></i>
									<input placeholder="Email" id="email_create" type="email">
								</div>
								<div class="input-field col s12">
									<i class="mdi-action-lock prefix"></i>
									<input placeholder="Password" id="password_create" type="password">
								</div>
								<div class="center">
									<a class="waves-effect waves-light btn margin-top margin-bottom blue">register</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('body').css({'background':'url(<?php echo base_url();?>assets/assets/bromo.jpg)', 
		'background-repeat':'none',
		'background-size':'cover',
		'background-position':'center center',
		'min-height':'100vh',
		'width':'auto'}
		);})
</script>
<script type="text/javascript">
var animationDelay = 2500;

animateHeadline($('.cd-headline'));

function animateHeadline($headlines) {
	$headlines.each(function(){
		var headline = $(this);
		//trigger animation
		setTimeout(function(){ hideWord( headline.find('.is-visible') ) }, animationDelay);
		//other checks here ...
	});
}
function hideWord($word) {
	var nextWord = takeNext($word);
	switchWord($word, nextWord);
	setTimeout(function(){ hideWord(nextWord) }, animationDelay);
}

function takeNext($word) {
	return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
}

function switchWord($oldWord, $newWord) {
	$oldWord.removeClass('is-visible').addClass('is-hidden');
	$newWord.removeClass('is-hidden').addClass('is-visible');
}

singleLetters($('.cd-headline.letters').find('b'));

function singleLetters($words) {
	$words.each(function(){
		var word = $(this),
		letters = word.text().split(''),
		selected = word.hasClass('is-visible');
		for (i in letters) {
			letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
		}
		var newLetters = letters.join('');
		word.html(newLetters);
	});
}
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#username_create").blur(function(){
		var user_name = $("#username_create").val();
		if(user_name != 0)
		{ 
			if(isValidUserName(user_name))
			{
				document.getElementById("username_create_verify").innerHTML = "";
				$("#username_create_verify").removeClass("red-text");
				$("#username_create_icon").removeClass("red-text");
			} else {               
				document.getElementById("username_create_verify").innerHTML = "Wrong user name";
				$("#username_create_verify").addClass("red-text");
				$("#username_create_icon").addClass("red-text"); 
			}
		}
		else {
			document.getElementById("username_create_verify").innerHTML = "";
			$("#username_create_verify").removeClass("red-text");
			$("#username_create_icon").removeClass("red-text");
		}

	});
	$("#email_create").blur(function(){
		var email = $("#email_create").val();

		if(email != 0)
		{
			if(!isValidEmailAddress(email)){
				document.getElementById("email_verify").innerHTML = "Wrong email";
				$("#email_verify").addClass("red-text");
				$("#email_create_icon").addClass("red-text");               	
			}else{
				document.getElementById("email_verify").innerHTML = "Email";
				$("#email_verify").removeClass("red-text");
				$("#email_create_icon").removeClass("red-text");
			}

		}
		else {
			document.getElementById("email_verify").innerHTML = "Email";
			$("#email_verify").removeClass("red-text");
			$("#email_create_icon").removeClass("red-text");
		}

	});
	
	$("#password").blur(function(){
		var password = $("#password").val();

		if($("#password").val().length >=6)
		{

			if(isValidPassword(password))
			{
				$("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
				email_con=true;
               //register_show();
           } else {

           	$("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
           }

       }
       else {
       	$("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
       }

   });

});
function isValidUserName(username) {
	var pattern = new RegExp(/^[a-z0-9 _-]{4,16}$/i);
	return pattern.test(username);
}
function isValidPassword(password) {
	var pattern = new RegExp(/^[a-z0-9_-]{6,32}$/i);
	return pattern.test(password);
}
function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test(emailAddress);
}
</script>
