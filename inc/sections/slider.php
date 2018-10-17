<?php

/**
 * 
 * Slider section of template
 */

$slide1 = esc_attr(get_option('slider_image_1'));
$slide2 = esc_attr(get_option('slider_image_2'));
$slide3 = esc_attr(get_option('slider_image_3'));
$slide4 = esc_attr(get_option('slider_image_4'));

$arr = array(
  $slide1,$slide2,$slide3,$slide4
);
?>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <?php $i=1; 
          foreach($arr as $slide):
            $active = ($i==1 ?'active':'');
            ?>
          <div class="carousel-item <?php echo $active;?>" style="background-image: url('<?php print $slide ;?>')">
          
            <div class="carousel-caption d-none d-md-block">
                  <div class="carousel-caption-container">
                    <div class="caption-cell">
                    
                      <div class="text-center">
                      <?php if(esc_attr(get_option('slider_text_'.$i))!=''):?>
                        <h3 class="heading p-5"><?php print esc_attr(get_option('slider_text_'.$i));?> </h3>
                        <?php endif;?>
                        <?php if(esc_attr(get_option('slider_sub_text_'.$i))!=''):?>
                        <h4 class="subtext p-3"><?php print esc_attr(get_option('slider_sub_text_'.$i));?></h4>
                        <?php endif;?>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          
          <?php $i++; endforeach;?>
          <!-- Slide Two - Set the background image for this slide in the line below -->
 
        </div>

      </div>        
