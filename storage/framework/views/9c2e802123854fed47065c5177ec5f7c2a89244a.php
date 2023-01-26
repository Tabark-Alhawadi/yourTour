<style>
    .navbar  {
        background-color: #14141F;
    }
</style>
<?php echo $__env->make('publicUser.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>
<br>
<br>
<br>
	<div>
	<!-- START CONTACT SECTION -->
	<div class="container">
		<div class="section-contact">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10 col-xl-8">
					<div class="header-section text-center">
						<h2 class="title">Get In Touch
							<span class="dot"></span>
							<span class="big-title">CONTACT</span>
						</h2>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur commodo risus, nec pellentesque turpis efficitur non.</p>

					</div>
				</div>
			</div>
			<div class="form-contact">
				<form>
					<div class="row">
						<div class="col-md-6">
							<div class="single-input">
								<i class="fas fa-user"></i>
								<input type="text" name="name" placeholder="ENTER YOUR NAME">
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-input">
								<i class="fas fa-envelope"></i>
								<input type="text" name="email" placeholder="ENTER YOUR EMAIL">
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-input">
								<i class="fas fa-phone"></i>
								<input type="text" name="phoneNumber" placeholder="ENTER YOUR PHONE NUMBER">
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-input">
								<i class="fas fa-check"></i>
								<input type="text" name="subject" placeholder="ENTER YOUR SUBJECT">
							</div>
						</div>
						<div class="col-12">
							<div class="single-input">
								<i class="fas fa-comment-dots"></i>
								<textarea placeholder="ENTER YOUR MESSAGE"></textarea>
							</div>
						</div>
						<div class="col-12">
							<div class="submit-input text-center">
								<input type="submit" name="submit" value="Send Message">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- / END CONTACT SECTION -->
	</div>
<?php echo $__env->make('publicUser.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\yourTour\resources\views/publicUser/contact.blade.php ENDPATH**/ ?>