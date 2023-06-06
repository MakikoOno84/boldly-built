/**
 * File inview.js.
 *
 * Check if an element is visible in viewport when scrolling a page
 * and apply a class name from animation.css.
 * 
 */

jQuery('.fadeInUpTrigger').on('inview', function(event, isInView) {
    // classNames='animate__animated animate__fadeInUp change-time';//animate.css
    classNames='fadeInUp';//css
    if (isInView) {//when an element is in view
        jQuery(this).addClass(classNames);//add class name
    } else {//when an element is out of view
        jQuery(this).removeClass(classNames);//remove class name
    }
  });