<?php
/**
 * Template Name: Free Sub
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>New African Magazine Readership Survey 2016</title>
	<style type="text/css">
		html { height:100%; }
		body { font-family: arial, helvetica, sans-serif; margin:0; height:100%;}
		h3{ color: #0089b4; }
		p{ font-size: smaller;}
		.smcx-embed{
			height:100%;
		}
		.smcx-embed>.smcx-iframe-container{
			height:100%;
		}
		#body, #container{
			height:100%;
		}
		.textboxes{     width: 100%;
		    height: 21px;
		    margin: 10px;
		    font-size: 16px;
		    padding: 10px 0;
		}
		@media (min-width: 767px) {
		  #actual-form{     
		  	width: 50%;

			}

		}
		input[type=submit] {
		    padding:5px 15px; 
		    background:blue; 
		    border:0 none;
		    cursor:pointer;
		    -webkit-border-radius: 5px;
		    width:100%;
		    border-bottom:grey;
			background: #3498db;
			background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
			background-image: -moz-linear-gradient(top, #3498db, #2980b9);
			background-image: -ms-linear-gradient(top, #3498db, #2980b9);
			background-image: -o-linear-gradient(top, #3498db, #2980b9);
			background-image: linear-gradient(to bottom, #3498db, #2980b9);
			font-family: Arial;
			color: #ffffff;
			font-size: 20px;
			padding: 10px 20px 10px 20px;
			text-decoration: none;
    		margin: 20px 10px;
		}
	</style>
</head>
<body>
	<div id="container" style="width:100%; text-align:center">
		<!-- <div id="header" style="margin-bottom:70px; margin-bottom: 70px; border-top: 3px solid darkred;">
			<a target="_blank" href="http://africanbusinessmagazine.com/category/african-banker/"><img src="http://africanbusinessmagazine.com/wordpress/wp-content/themes/africanbusinessmagazine/lib/img/abm-logo.png" width="400px" /></a>
		</div> -->
		

			<div id="body" style=" border-top: 5px solid #cb2311; background-color: lightgrey;">

				<div class="container" style="width:700px; margin-left:auto; margin-right:auto;  margin-top:50px; background-color:white;">
					<div style="display:none">
						<a target="_blank" href="http://africanbusinessmagazine.com/subscribe/"><img src="http://africanbusinessmagazine.com/wordpress/wp-content/uploads/2016/01/abbb.png" /></a>
					</div>
					<script>(function(e,t,n,o){var s,c,r;e.SMCX=e.SMCX||[],t.getElementById(o)||(s=t.getElementsByTagName(n),c=s[s.length-1],r=t.createElement(n),r.type="text/javascript",r.async=!0,r.id=o,r.src=["https:"===location.protocol?"https://":"http://","widget.surveymonkey.com/collect/website/js/fx0nvNqSjCmNjVnCr2qzx15FarwgNBO_2FHNe0gJ0xhdiWeDVLqYXhe7BGjGClFgk0.js"].join(""),c.parentNode.insertBefore(r,c))})(window,document,"script","smcx-sdk");</script><a style="font: 12px Helvetica, sans-serif; color: #999; text-decoration: none;" href=https://www.surveymonkey.com/mp/customer-satisfaction-surveys/> Create your own user feedback survey </a>

					<div id="actual-form" style="display:none; margin-left:auto; margin-right:auto;">
						<h3>Get your complimentary 12-month subscription</h3>
						<p>Simply fill out your details in the form below to claim your free copy, don't miss out</p>
						<!--
						<form action="demo_form.asp">
						  <input type="text" name="fname" class="textboxes" placeholder="First Name"><br>
						  <input type="text" name="lname" class="textboxes" placeholder="Last Name"><br>
						  <input type="text" name="lname" class="textboxes" placeholder="Email Address"><br>
						  <input type="text" name="lname" class="textboxes" placeholder="Telepone Number"><br>
						  <input type="checkbox" name="vehicle" value="Bike">I have read and agree to the terms and conditions as outlined below and African Business Magazine's privacy policy<br>
						  <input type="submit" value="Claim your subscription">
						</form>
					-->
						<?php 
							$id=11299; 
							$post = get_post($id); 
							$content = apply_filters('the_content', $post->post_content); 
							echo $content;  
							?>
					</div>
				</div>
			</div>
	</div>

</body>
</html>