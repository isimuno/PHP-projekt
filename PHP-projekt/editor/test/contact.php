<?php 
	print '
	<h1 style = "margin-left: 550px; margin-top:20px; margin-bottom:30px;">Contact Form</h1>
	<div id="contact" >
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.3153194980127!2d24.760521315320577!3d37.87630797974113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a253b2c7827e8d%3A0xf44c3375c4fbba33!2sHotel+Perrakis!5e0!3m2!1shr!2shr!4v1541622241717" width="85%" height="400" frameborder="0" style="border:0; margin-left:100px;" allowfullscreen></iframe>
		<form action="send_email.php" id="contact_form" name="contact_form" method="POST">
		<div style = "margin-left:375px; margin-top:20px;">
			<label for="fname">First Name *</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
			
			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last natme.." required>
				
			<label for="email">Your E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

			<label for="country">Country</label>
			<select id="country" name="country">
				<option value="">Please select</option>
				<option value="BE">Belgium</option>
				<option value="HR" selected>Croatia</option>
				<option value="LU">Luxembourg</option>
				<option value="HU">Hungary</option>
			</select>

			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

			<input type="submit" value="Submit">
		</form>
	</div></div>';
?>