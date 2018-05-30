<?php
// slickstack custom notices
function slickstack_custom_admin_notice() { ?>

<div class="notice notice-warning">
  <p>Notice: Your server's Nginx cache path has changed to <strong>/var/www/cache</strong> (please update this setting <a href="/wp-admin/tools.php?page=nginx-cache">over here</a>).</p>
  <p>This message will disappear automatically in a few days, thank you.
</div>

<?php }
add_action('admin_notices', 'slickstack_custom_admin_notice');
