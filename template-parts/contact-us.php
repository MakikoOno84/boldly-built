<?php
/**
 * Template part for displaying a contact section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boldly_Built
 */

?>

<section id='contact-us'>
    <h2>Get In Touch</h2>
    <img src="<?php echo get_template_directory_uri() ?>/images/contact-img.jpg" alt="picture of overhead shot of laptops and notes">
    <button type='button' class='contact-btn open-modal' data-modal-target="modal1">Contact Us</button>
</section>


<!-- modal -->


<div class="modal">
<span class="modal-backdrop close-modal"></span>
<div class="modal-content">
  <div class="modal-header">
    <h2 class="modal-title">Modal Title</h2><button class="close-modal">&times</button>
  </div>
  <div class="modal-body">
        <?php
            echo do_shortcode( '[contact-form-7 id="97" title="contact us form"]' );
        ?>
  </div>
  <div class="modal-footer">
    <button class="close-modal">Cancel</button>
  </div>
</div>