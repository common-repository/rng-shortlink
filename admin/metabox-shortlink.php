<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<div class="align-left">
    <br><input readonly style="direction:ltr;text-align: left;width: 100%;" type="text" value="<?php echo home_url() . "/p" . $post->ID; ?>" onclick="select()"><br>
</div>