<div class="account-container">
    <?php if ($attributes['show_title']) : ?>
        <h2><?php _e('Sign In', 'personalize-login'); ?></h2>
    <?php endif; ?>

    <!-- Show errors if there are any -->
    <?php if (count($attributes['errors']) > 0) : ?>
        <?php foreach ($attributes['errors'] as $error) : ?>
            <p class="login-error">
                <?php echo $error; ?>
            </p>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php
    $current_user = wp_get_current_user(get_current_user_id());
    $user_info    = get_userdata($current_user->ID);
    $user_meta    = get_user_meta(get_current_user_id(), false);
    $username     = $user_info->user_login;
    $first_name   = $user_info->first_name;
    $last_name    = $user_info->last_name;
    ?>
    <div>
        <h2><?php echo $first_name . $last_name; ?></h2>
        <ul>
            <li><b><?php _e('Nickname', 'personalize-login'); ?></b>: <?php echo $username; ?></li>
            <li><b><?php _e('Login', 'personalize-login'); ?></b>: <?php echo $user_info->user_login; ?></li>
            <li><b><?php _e('Nicename', 'personalize-login'); ?></b>: <?php echo $user_info->user_nicename; ?></li>
            <li><b><?php _e('Email', 'personalize-login'); ?></b>: <?php echo $user_info->user_email; ?></li>
            <li><b><?php _e('URL', 'personalize-login'); ?></b>: <?php echo $user_info->user_url; ?></li>
            <li><b><?php _e('Register date', 'personalize-login'); ?></b>: <?php echo $user_info->user_registered; ?></li>
            <li><b><?php _e('Display Name', 'personalize-login'); ?></b>: <?php echo $user_info->display_name; ?></li>
        </ul>
    </div>

</div>
