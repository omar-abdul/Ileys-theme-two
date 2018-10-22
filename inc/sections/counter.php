<?php
/**
 * 
 * 
 * Counter section of ileys template
 * 
 * 
 */

 $checked = get_theme_mod('ileys_show_counter');

 $icon1  = get_theme_mod('ileys_first_icon');
 $icon2  = get_theme_mod('ileys_second_icon');
 $icon3  = get_theme_mod('ileys_third_icon');

//Limit to reach counter when incrementing in main.js
 $first_limit = is_int(get_theme_mod('ileys_first_limit',0))?get_theme_mod('ileys_first_limit',0):0;
 $second_limit = is_int(get_theme_mod('ileys_second_limit',0))?get_theme_mod('ileys_second_limit',0):0;
 $third_limit = is_int(get_theme_mod('ileys_third_limit',0))?get_theme_mod('ileys_third_limit',0):0;


if(true == $checked):
?>
    <div class="container-fluid  bg-dark-red p-5">
        <div class="row align-items-center text-center">
        
            <div class="col-12 col-md-4">
                <span style="font-size:3em">
                <i class="<?php echo esc_html__($icon1)?>"></i>
                </span>
                <div class="counter" data-limit="<?php echo esc_html__($first_limit)?>">
                <p class="count"></p>
                <p class="field"><?php echo esc_html__(get_theme_mod('ileys_counter_field_one')) ?></p>                 
                </div><!--counter-->
            </div><!--col-->

            <div class="col-12 col-md-4">
                <span style="font-size:3em">
                <i class="<?php echo esc_html__($icon2)?>"></i>
                </span>
                <div class="counter" data-limit="<?php echo esc_html__($second_limit)?>">
                <p class="count"></p>
                <p class="field"><?php echo esc_html__(get_theme_mod('ileys_counter_field_two')) ?></p>                
                </div><!--counter-->
            </div><!--col-->

            <div class="col-12 col-md-4">
                <span style="font-size:3em">
                <i class="<?php echo esc_html__($icon3)?>"></i>
                </span>
                <div class="counter" data-limit="<?php echo esc_html__($third_limit)?>">
                    <p class="count"></p>
                    <p class="field"><?php echo esc_html__(get_theme_mod('ileys_counter_field_three')) ?></p>
                </div><!--counter-->
               
            </div><!--col-->                        
        </div><!--row-->
    </div>

<?php    
endif;
 
