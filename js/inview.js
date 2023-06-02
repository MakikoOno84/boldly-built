/**
 * File inview.js.
 *
 * Check if an element is visible in viewport when scrolling a page
 * and apply a class name from animation.css.
 * 
 */

jQuery('.fadeInUpTrigger').on('inview', function(event, isInView) {
    if (isInView) {//when an element is in view
        jQuery(this).addClass('animate__animated animate__fadeInUp delay-time');//add class name
    } else {//when an element is out of view
        jQuery(this).removeClass('animate__animated animate__fadeInUp delay-time');//remove class name
    }
  });