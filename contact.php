<?php 
    $page = "contact";

    require_once ('header.php');
?>
<main>
		<div class="banner">
			<img src="images/banner-contact.jpg" alt="">
			<div class="info-box">
				<h1 class="hero-heading">
					<span class="course_name">CONTACT</span>
				</h1>
			</div>
		</div>

		<!-- Edita a partir daqui -->
		<div class="contact">
			
				<div class="user-form">
					
					<h2>Contact US</h2>
					
					<form>

						<input type="text" id="user-name" name="user-name" placeholder="First Name" />

						<input type="text" id="user-last-name" name="user-last-name" placeholder="Last Name" />

						<input type="text" id="user-email" name="user-email" placeholder="Email"/>

						<input type="text" id="bcit-number" name="bcit-number" placeholder="BCIT number"/>

						<input type="radio" name="status-student" value="1" checked> Prospective Student<br>
						  
						<input type="radio" name="status-student" value="2"> Current Student<br>

						<input type="button" id="btn-save" value="Save" />
					</form>
				</div>


				<div class="course-contacts">
					
						<h2>Contact Instructor</h2>
						
						<h2>Jeffrey Parkey</h2>
						<p>Concat the instructor <a href="jeffrey_parker@bcit.ca">Jeffrey Parkey</a></p>

						<h2>Michael Whyte</h2>
						<p>Concat the instructor <a href="michael_whyte@bcit.ca">Michael Whyte</a></p>
				</div>
			
		</div>
		<!-- até aqui -->
		
	</main>

<?php require_once ('footer.php'); ?>