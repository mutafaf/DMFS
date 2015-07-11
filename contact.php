
			<?php
				include("header.php")
			?>
	     			<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
										<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"> </span>
					<span class="icon-bar"> </span>
					<span class="icon-bar"> </span>
				  </button>
				</div>
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="projects.php">Projects</a></li>
					<li class="active"><a href="contact.php">Contact Us</a></li>
				  </ul>
					
				  <div class="clearfix"> </div>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
						<div class="clearfix"> </div>
					<!----start-main-header----->
					<div class="main-header">
			
				  <!-- script-for-menu -->
			 <script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle("slow" , function(){
						});
					});
			 </script>
			 <!-- script-for-menu -->	 
				
						
		 </div>
	<!----End-main-header----->
</div>	
</div>		
</div>	
<!---End-header--->
		<!---start-content----->
		<div class="content">
			<div class="container">
				<!---start-contact---->
				<div class="contact">
					<div class="contact-header">
							<h3>Contact</h3>
							<ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							  <li class="active">Contact</li>						  
							</ol>
				  </div>
				  <div class="contact_head">
				   <p>Lorem ipsum dolor sit amet, adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.
				 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the recently with desktop publishing software.</p>
			 </div>	
		 <div class="contact-grids">	
			  <div class="col-md-6 contact_left">
			 		<h3>Contact Form</h3>
							

				  <form actoin="mail.php" method="post" enctype="text/plain">

					 <div class="form_details">
						   <input type="text" class="text" id="fName" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
						   <input type="text" class="text" id="emid" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
							<input type="text" class="text" id="subjectCont" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
							<textarea id="msgBox" value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<div class="clearfix"> </div>					   
							<input name="submit" type="submit" value="Send message">
					 </div>					 
				  </form>
				  	 


					
	
			 </div>
			 <div class="col-md-6 contact_right">	
				   <h3>Address</h3>
				  <div class="address">
					 <ul>
					 <li>57-D, DHA EME Sector Lahore, Pakistan</p>
					  </li>
					 <li>Phone : +92 322 4228357</li>
					 <li>Email :   <a href="mailto:info@dmfs.com.pk">info@dmfs.com.pk</a></li>
					 <li>Follow on :  <a href="https://www.facebook.com/dmfsLahore"> Facebook</a><a href="https://www.twitter.com/dmfsLahore">Twitter</a></li>
					 </ul>
				  </div>					
			 </div>
			 <div class="clearfix"></div>
		 </div>

				  <div class="map">
					 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d838.232568365316!2d74.06307123710255!3d32.568938985791846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1436609649460" frameborder="0" style="border:0" allowfullscreen></iframe>
				  </div>
				<!---End-contact---->		
			</div>
		</div>
				<?php
			include("footer.php")
			?>
		 <!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 

	</body>
</html>

