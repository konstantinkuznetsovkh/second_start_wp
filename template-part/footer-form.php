<?php
if (!defined('ABSPATH')) {
	die();
};
?>


<div class="col-sm-5 sm-margin-b-30">
    <h2 class="color-white"><?php esc_html_e('Send Us a Note','lazy_coder');?></h2>
    <form class="footer-contact-form"><?php //этот класс для того чтоб мы цеплялись и обрабатывали форму or id ;?>
        <input type="text" name="name" class="form-control footer-input margin-b-20" placeholder="Name" required>
        <input type="email" name="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
        <input type="text" name="phone" class="form-control footer-input margin-b-20" placeholder="Phone" required>
        <textarea name="msg" class="form-control footer-input margin-b-30" rows="6" placeholder="Message"
            required></textarea>
        <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">
            <?php esc_html_e('Submit','lazy_coder'); //чтоб можно было локализировать?></button>
    </form>
</div>