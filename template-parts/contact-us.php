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
    <h2 class='contact-heading'><span class='contact-text'>Get In<br></span> <span class='contact-text-two'>Touch</span></h2>
    <button type='button' class='contact-btn open-modal'>Contact Us</button>
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
