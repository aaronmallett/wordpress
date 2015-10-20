<?php get_header(); ?>

	<div class="full-page-panel" id="panel1">

			<div class="panel1-height">
			<img id="logo" src="wp-content/uploads/2015/10/logo.png" alt="xalix logo">
			<p>we make apps and stuff</p>
			</div>
		</div>

		<div class="full-page-panel" id="panel2">
			<div class="panel2-height">
				<h2>WHAT DO WE DO?</h2>
				<hr id="rule">
				<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor</p>
			</div>
			<a href="#panel3"><img id="arrow" src="wp-content/uploads/2015/10/arrow.png"> </a>
		</div>

		<div id="panel3">
			<div class="panel3-height">
				<h2>WHAT WE'VE<br>BEEN UP TO</h2>
				<div id="phone-wrapper">
					<div class="phone">

					<object id="phone">
						<embed src="<?php echo get_template_directory_uri(); ?>/img/phone2.svg">
					</object>
					</div>
				</div>

				<h3>DOWNLOAD<br>ON THE</h3>
				<a href="#">PLAYSTORE</a>
			</div>
		</div>

		<div id="panel4">
			<div id="form-wrapper">
			<form>
				<input type="text" name="name" id="input-name" placeholder="name"></input>
	            <input type="text" name="email" id="input-email" placeholder="email"></input>
	            <input type="text" name="message" id="input-message" placeholder="message"></input>
	            <button type="button">submit</button>
			</form>
			</div>
		</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
