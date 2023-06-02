

//1つめの動き
jQuery('.fadeInUpTrigger').on('inview', function(event, isInView) {
    if (isInView) {//表示領域に入った時
        jQuery(this).addClass('animate__animated animate__fadeInUp delay-time');//クラス名が付与
    } else {//表示領域から出た時
        jQuery(this).removeClass('animate__animated animate__fadeInUp delay-time');//クラス名が除去
    }
  });