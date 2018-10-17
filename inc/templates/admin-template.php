<h5>Ileys General Options</h5>


<?php settings_errors();?>

<?php

$slide1 = esc_attr(get_option('slider_image_1'));
$slide2 = esc_attr(get_option('slider_image_2'));
$slide3 = esc_attr(get_option('slider_image_3'));
$slide4 = esc_attr(get_option('slider_image_4'));

$arr = array(
  $slide1,$slide2,$slide3,$slide4  
);


?>
<div class="container">
<div class="row">
    <?php 
    $i=1;
    foreach($arr as $slide):
    ?>
    <div class="col-sm-4" >
  
        <img class="img-thumbnail" id="<?php echo "image".$i;?>" src="<?php print $slide?>">
        <p> <em>slide <?php echo $i;?> </em></p>
    </div>
    
    <?php $i++; endforeach; ?>

</div>

</div>

<form method="POST" action="options.php">
    <?php settings_fields('ileys-settings-group');?>
    <?php  do_settings_sections('ileys_theme')?>
    <?php submit_button();?>

    
</form>

