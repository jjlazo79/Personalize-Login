<div id="register-form" class="widecolumn">
	<?php if ($attributes['show_title']) : ?>
		<h3><?php _e('Register', 'personalize-login'); ?></h3>
	<?php endif; ?>

	<form id="signupform" action="<?php echo wp_registration_url(); ?>" method="post">
		<p class="form-row">
			<label for="email"><?php _e('Email', 'personalize-login'); ?> <strong>*</strong></label>
			<input type="text" name="email" id="email">
		</p>

		<p class="form-row">
			<label for="first_name"><?php _e('First name', 'personalize-login'); ?></label>
			<input type="text" name="first_name" id="first-name">
		</p>

		<p class="form-row">
			<label for="last_name"><?php _e('Last name', 'personalize-login'); ?></label>
			<input type="text" name="last_name" id="last-name">
		</p>

		<p class="form-row" style="position: relative;">
			<label for="pass1"><?php _e('New password', 'personalize-login'); ?></label>
			<input type="password" name="pass1" placeholder="Password" id="password-field"><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		</p>

		<p class="form-row" style="position: relative;">
			<label for="pass1"><?php _e('Repeat the password', 'personalize-login'); ?></label>
			<input type="password" name="pass2" placeholder="Repeat password" id="password-field-2"><span toggle="#password-field-2" class="fa fa-fw fa-eye field-icon toggle-password-2"></span>
		</p>

		<div id="pass-notice" class="hide">
			<span class="alert alert-danger"><?php _e('The two passwords you entered don\'t match.', 'personalize-login'); ?></span>
		</div>

		<p class="signup-submit">
			<input type="submit" name="submit" class="register-button" value="<?php _e('Register', 'personalize-login'); ?>" />
		</p>
	</form>
</div>
<style>
	.field-icon {
		position: absolute;
		right: 20px;
		top: 10px;
	}
</style>
<script>
	//Show/hide pass
	$(".toggle-password, .toggle-password-2").click(function() {
		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});

	$('#password-field-2').focusout(function() {
		var pass1 = $('#password-field').val(),
			pass2 = $(this).val();
		if (pass1 != pass2) {
			$('#pass-notice').addClass('show');
			$('#pass-notice').removeClass('hide');
		}
	});
	$('#password-field-2').focusin(function() {
		$('#pass-notice').addClass('hide');
		$('#pass-notice').removeClass('show');
	});
</script>
