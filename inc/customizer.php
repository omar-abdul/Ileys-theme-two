<?php

/*
Additional customizer settings 
*/

require get_template_directory() . '/inc/customizer-controls.php';

function ileys_customize_register($wp_customize){

        $wp_customize->add_panel('ileys_section_panel',
        array(
            'title'=>(' Theme Sections'),
            'description'=> esc_attr('Choose what page appears on the about section'),
            'priority' => 160,
            'capability'=> 'edit_theme_options'
        )  
    );


    // About Section
        $wp_customize->add_section('ileys_about_section',
        
        array(
            'title'=>('About section '),
            'description'=> esc_attr('Choose what page appears on the about section'),
            'panel'=>'ileys_section_panel'
        )
    );

        $wp_customize->add_setting( 'ileys_dropdownpages',
        array(
            'default' => '',
            'transport' => 'refresh',
            "type"=>'theme_mod',
            'sanitize_callback' => 'absint'
        )
        );
        
        $wp_customize->add_control( 'ileys_control_dropdownpages',
        array(
            'label' => __( 'About Page' ),
            'description' => esc_attr( 'The featured image will show alongside the excerpt ' ),
            'section' => 'ileys_about_section',
            'settings'=>'ileys_dropdownpages',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'dropdown-pages',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            )
        );
        
        //Product Section
        $wp_customize->add_section('ileys_product_section',
        
        array(
            'title'=>('Product section '),
            'description'=> esc_attr('Choose Posts that appear on section'),
            'panel'=>'ileys_section_panel'
        )
    );

            $wp_customize->add_setting( 'ileys_category_setting',
            array(
            'default' => 0,
            'transport' => 'refresh',
            "type"=>'theme_mod',
            'sanitize_callback' => 'absint',
            'priority'=>1
            )
        );


            $wp_customize->add_control(new My_Dropdown_Category_Control($wp_customize,'ileys_category_dropdown',
        
            array(
               'label'=>__('Category to chose posts from'),
               'description'=>esc_html__('Optionally enter cateogry to choose posts from '),
               'section'=>'ileys_product_section',
               'settings'=>'ileys_category_setting' 
            )    
        )
    );

            $wp_customize->add_setting( 'product_button_url',
            array(
            'default' => 0,
            'transport' => 'refresh',
            "type"=>'theme_mod',
            'sanitize_callback' => 'esc_url',
            'priority'=>2
            )
        );

        $wp_customize->add_control('product_button_url',
        
        array(
           'label'=>__('Button url target'),
           'description'=>esc_html__(' '),
           'section'=>'ileys_product_section',
           'type'=>'url',
           'input_attrs'=>array(
               'placeholder'=>__('Enter url to go to ')
           )
        )    
           );

        // Trading Section
        $wp_customize->add_section('ileys_trading_section',
        
        array(
            'title'=>('Trading section '),
            'description'=> esc_html__('Choose what page appears on the trading section'),
            'panel'=>'ileys_section_panel'
        )
    );

        $wp_customize->add_setting( 'ileys_trading_dropdowncat',
        array(
            'default' => '',
            'transport' => 'refresh',
            "type"=>'theme_mod',
            'sanitize_callback'=>'absint'
        )
        );
        
        $wp_customize->add_control(new My_Dropdown_Category_Control($wp_customize,'ileys_trading_dropdowncat',
        
        array(
           'label'=>__('Category to chose posts from'),
           'description'=>esc_html__('Optionally enter cateogry to choose posts from '),
           'section'=>'ileys_trading_section',
            
        )    
    )
);

        $wp_customize->add_setting('ileys_trading_btn_url',
        array(
            'default'=>'#',
            'transport' =>'refresh',
            'type'=>'theme_mod',
            'sanitize_callback'=>'esc_url'
            )
        
        );

        $wp_customize->add_control('ileys_trading_btn_url',
        array(
            'label'=>__('Button url target'),
            'description'=>esc_html__(' '),
            'section'=>'ileys_trading_section',
            'type'=>'url',
            'input_attrs'=>array(
                'placeholder'=>__('Enter url to go to ')
            )
         )
            );

// Counter section

        $wp_customize->add_section('counter_section',
                
        array(
            'title'=>__('Counter Section '),
            'description'=> __('Edit Counter Section'),
            'panel'=>'ileys_section_panel'
            )
        );
        //counter checkbox

        $wp_customize->add_setting('ileys_show_counter',
            array(
                'default'=>'',
                'transport'=>'refresh',
                'capability'=>'edit_theme_options',
                'sanitize_callback'=>'ileys_theme_sanitize_checkbox'
            )       
        );

        $wp_customize->add_control( 'ileys_show_counter', 
        array(
            'type' => 'checkbox',
            'section' => 'counter_section', // Add a default or your own section
            'label' => __( 'Show counter section','ileystheme'),
            'description' => __( '' ),
          )
         );



         //counter icons

         $wp_customize->add_setting('ileys_first_icon',
         array(
            'default'=>'',
            'transport'=>'refresh',
            'capability'=>'edit_theme_options',
            'sanitize_callback'=>'esc_attr'   
         )
        );

        $wp_customize->add_control( 'ileys_first_icon',
        array(
           'label' => __( 'First Icon' ),
           'description' => esc_html__( 'You can find a full list of the icon at https://fontawesome.com/icons' ),
           'section' => 'counter_section',
           'priority' => 10, // Optional. Order priority to load the control. Default: 10
           'type' => 'text', // Can be either text, email, url, number, hidden, or date
           'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
           'input_attrs' => array( // Optional.

              'placeholder' => __( 'example fas fa-ghost' ),
           ),
        )
     );        




     $wp_customize->add_setting('ileys_second_icon',
     array(
        'default'=>'',
        'transport'=>'refresh',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'esc_attr'   
     )
    );

    $wp_customize->add_control( 'ileys_second_icon',
    array(
       'label' => __( 'second Icon' ),
       'description' => esc_html__( 'You can find a full list of the icon at https://fontawesome.com/icons' ),
       'section' => 'counter_section',
       'priority' => 10, // Optional. Order priority to load the control. Default: 10
       'type' => 'text', // Can be either text, email, url, number, hidden, or date
       'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
       'input_attrs' => array( // Optional.

          'placeholder' => __( 'example fas fa-ghost' ),
       ),
    )
 );      

         $wp_customize->add_setting('ileys_third_icon',
         array(
            'default'=>'',
            'transport'=>'refresh',
            'capability'=>'edit_theme_options',
            'sanitize_callback'=>'esc_attr'   
         )
        );

        $wp_customize->add_control( 'ileys_third_icon',
        array(
           'label' => __( 'Third Icon' ),
           'description' => esc_html__( 'You can find a full list of the icon at https://fontawesome.com/icons' ),
           'section' => 'counter_section',
           'priority' => 10, // Optional. Order priority to load the control. Default: 10
           'type' => 'text', // Can be either text, email, url, number, hidden, or date
           'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
           'input_attrs' => array( // Optional.

              'placeholder' => __( 'example fas fa-ghost' ),
           ),
        )
     );  



     // Counter limit


     $wp_customize->add_setting('ileys_first_limit',
     array(
        'default'=>'',
        'transport'=>'refresh',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'absint'   
     )
    );
    $wp_customize->add_control( 'ileys_first_limit',
    array(
       'label' => __( 'First counter limit' ),
       'description' => esc_html__( '' ),
       'section' => 'counter_section',
       'priority' => 10, // Optional. Order priority to load the control. Default: 10
       'type' => 'number', // Can be either text, email, url, number, hidden, or date
       'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
       'input_attrs' => array( // Optional.
        'placeholder' => __( 'example 300' ),
       ),
    )
 );     
     $wp_customize->add_setting('ileys_second_limit',
     array(
        'default'=>'',
        'transport'=>'refresh',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'absint'   
     )
    );
    $wp_customize->add_control( 'ileys_second_limit',
    array(
       'label' => __( 'Second counter limit' ),
       'description' => esc_html__( '' ),
       'section' => 'counter_section',
       'priority' => 10, // Optional. Order priority to load the control. Default: 10
       'type' => 'number', // Can be either text, email, url, number, hidden, or date
       'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
       'input_attrs' => array( // Optional.

          'placeholder' => __( 'example 300' ),
       ),
    )
 );   

      $wp_customize->add_setting('ileys_third_limit',
     array(
        'default'=>'',
        'transport'=>'refresh',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'absint'   
     )
    );
    $wp_customize->add_control( 'ileys_third_limit',
    array(
       'label' => __( 'Third counter limit' ),
       'description' => esc_html__( '' ),
       'section' => 'counter_section',
       'priority' => 10, // Optional. Order priority to load the control. Default: 10
       'type' => 'number', // Can be either text, email, url, number, hidden, or date
       'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
       'input_attrs' => array( // Optional.
        'placeholder' => __( 'example 300' ),
       ),
    )
 );   


       $wp_customize->add_setting('ileys_counter_field_one',
     array(
        'default'=>'',
        'transport'=>'refresh',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'esc_html'   
     )
    );
    $wp_customize->add_control( 'ileys_counter_field_one',
    array(
       'label' => __( 'Field corresponding to first counter' ),
       'description' => esc_html__( 'The first counter field' ),
       'section' => 'counter_section',
       'priority' => 10, // Optional. Order priority to load the control. Default: 10
       'type' => 'text', // Can be either text, email, url, number, hidden, or date
       'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
       'input_attrs' => array( // Optional.
        'placeholder' => __( 'example :Happy clients' ),
       ),
    )
 ); 

        $wp_customize->add_setting('ileys_counter_field_two',
     array(
        'default'=>'',
        'transport'=>'refresh',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'esc_html'   
     )
    );
    $wp_customize->add_control( 'ileys_counter_field_two',
    array(
       'label' => __( 'Field corresponding to second counter' ),
       'description' => esc_html__( 'The first counter field' ),
       'section' => 'counter_section',
       'priority' => 10, // Optional. Order priority to load the control. Default: 10
       'type' => 'text', // Can be either text, email, url, number, hidden, or date
       'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
       'input_attrs' => array( // Optional.
        'placeholder' => __( 'example :Happy clients' ),
       ),
    )
 ); 

        $wp_customize->add_setting('ileys_counter_field_three',
     array(
        'default'=>'',
        'transport'=>'refresh',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'esc_html'   
     )
    );
    $wp_customize->add_control( 'ileys_counter_field_three',
    array(
       'label' => __( 'Field corresponding to third counter' ),
       'description' => esc_html__( 'The first counter field' ),
       'section' => 'counter_section',
       'priority' => 10, // Optional. Order priority to load the control. Default: 10
       'type' => 'text', // Can be either text, email, url, number, hidden, or date
       'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
       'input_attrs' => array( // Optional.
        'placeholder' => __( 'example :Happy clients' ),
       ),
    )
 ); 




        $wp_customize->add_section('ileys_promotion_section',
        
        array(
            'title'=>__('Promotional section '),
            'description'=> __('Edit Promotion section'),
            'panel'=>'ileys_section_panel'
        )
    );

        $wp_customize->add_setting( 'ileys_promotion_bg',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'my_sanitize_image',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        )
        );
        
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ileys_control_image',
        array(
           'label' => __( 'Promotion Section Background ' ),
           'description' => esc_html__( 'Choose mage to set as background' ),
           'section' => 'ileys_promotion_section',
           'settings'=>'ileys_promotion_bg',
           'button_labels' => array( // Optional.
              'select' => __( 'Select Image' ),
              'change' => __( 'Change Image' ),
              'remove' => __( 'Remove' ),
              'default' => __( 'Default' ),
              'placeholder' => __( 'No image selected' ),
              'frame_title' => __( 'Select Image' ),
              'frame_button' => __( 'Choose Image' ),
           )
        )
     ) );

     $wp_customize->add_section('ileys_site_section',
        
     array(
         'title'=>__('Site settings '),
         'description'=> __('Edit Promotion section'),
         'panel'=>'ileys_section_panel'
     )
 );

     $wp_customize->add_setting( 'ileys_logo',
     array(
         'default' => '',
         'transport' => 'refresh',
         'sanitize_callback' => 'my_sanitize_image',
         'type' => 'theme_mod',
         'capability' => 'edit_theme_options'
     )
     );
     
     $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ileys_logo',
     array(
        'label' => __( 'Select logo image ' ),
        'description' => esc_html__( 'Choose mage to set as logo' ),
        'section' => 'ileys_site_section',

        'button_labels' => array( // Optional.
           'select' => __( 'Select Image' ),
           'change' => __( 'Change Image' ),
           'remove' => __( 'Remove' ),
           'default' => __( 'Default' ),
           'placeholder' => __( 'No image selected' ),
           'frame_title' => __( 'Select Image' ),
           'frame_button' => __( 'Choose Image' ),
        )
     )
  ) );
    

  $wp_customize->add_setting( 'ileys_exclude_posts',
  array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'esc_attr',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
  )
  );
  
  $wp_customize->add_control( 'ileys_exclude_posts',
  array(
     'label' => __( 'Select Categories to exclude from main post list ' ),
     'description' => __( 'Input categories separated by commas ' ,'ileystheme'),
     'section' => 'ileys_site_section',
     'capability' => 'edit_theme_options',
     'type'=>'text',
     'input_attrs'=>array(
         'placeholder'=>"eg. brands,trading,etc"
     )
) );

//Banner Quote Section
$wp_customize->add_section('ileys_quotes_section',
        
    array(
        'title'=>__('Banner Quote Section '),
        'description'=> __('Edit Banner Quote Section'),
        'panel'=>'ileys_section_panel'
    )
);

$wp_customize->add_setting( 'ileys_ceo_message',
    array(
        'default' => '',
        'transport' => 'refresh',
        "type"=>'theme_mod',
        'sanitize_callback'=>'esc_attr'
    )
);


$wp_customize->add_control( 'ileys_ceo_message',
array(
   'label' => __( 'Quote text','ileystheme' ),
   'description' => esc_html__( 'Text that should appear in the banner under quotes' ),
   'section' => 'ileys_quotes_section',
   "setting" =>'ileys_ceo_message',
   'priority' => 10, // Optional. Order priority to load the control. Default: 10
   'type' => 'text', // Can be either text, email, url, number, hidden, or date
   'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
   'input_attrs' => array( // Optional.
      'class' => 'my-custom-class',
      'style' => 'border: 1px solid rebeccapurple',
      'placeholder' => __( 'Enter text...' ),
   ),
)
);



$wp_customize->add_setting( 'ileys_ceo_message_author',
    array(
        'default' => '',
        'transport' => 'refresh',
        "type"=>'theme_mod',
        'sanitize_callback'=>'esc_attr'
    )
);

$wp_customize->add_control( 'ileys_ceo_message_author',
array(
   'label' => __( 'Quote text','ileystheme' ),
   'description' => esc_html__( 'Text that should appear in the banner under quotes','ileystheme' ),
   'section' => 'ileys_quotes_section',
   "setting" =>'ileys_ceo_message_author',
   'priority' => 10, // Optional. Order priority to load the control. Default: 10
   'type' => 'text', // Can be either text, email, url, number, hidden, or date
   'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
   'input_attrs' => array( // Optional.
      'class' => 'my-custom-class',
      'style' => 'border: 1px solid rebeccapurple',
      'placeholder' => __( 'Enter name...' ),
   ),
)
);


     $wp_customize->add_setting( 'promotion_section_text',
     array(
        'default' => '',
        'transport' => 'refresh',
        "type"=>'theme_mod',
        'sanitize_callback'=>'esc_attr'
     )
  );
   
  $wp_customize->add_control( 'promotion_section_text',
     array(
        'label' => __( 'What text should appear on the promotion section' ),
        'description' => esc_html__( 'Choose text to show over image' ),
        'section' => 'ileys_promotion_section',
        "setting" =>'promotion_section_text',
        'priority' => 10, // Optional. Order priority to load the control. Default: 10
        'type' => 'text', // Can be either text, email, url, number, hidden, or date
        'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        'input_attrs' => array( // Optional.
           'class' => 'my-custom-class',
           'style' => 'border: 1px solid rebeccapurple',
           'placeholder' => __( 'Enter name...' ),
        ),
     )
  );

                $wp_customize->add_setting( 'promotion_button_text',
                array(
                    'default' => 0,
                    'transport' => 'refresh',
                    "type"=>'theme_mod',
                    'sanitize_callback' => 'esc_attr',
                    'priority'=>2
                )
                );

                $wp_customize->add_control('promotion_button_text',

                array(
                    'label'=>__('Button text'),
                    'description'=>esc_html__(' '),
                    'section'=>'ileys_promotion_section',
                    'type'=>'url',
                    'input_attrs'=>array(
                        'placeholder'=>__('Enter text ')
                    )
                )    
                );
            $wp_customize->add_setting( 'promotion_button_url',
            array(
                'default' => 0,
                'transport' => 'refresh',
                "type"=>'theme_mod',
                'sanitize_callback' => 'esc_url',
                'priority'=>2
             )
            );

            $wp_customize->add_control('promotion_button_url',

            array(
                'label'=>__('Button url target'),
                'description'=>esc_html__(' '),
                'section'=>'ileys_promotion_section',
                'type'=>'url',
                'input_attrs'=>array(
                    'placeholder'=>__('Enter url to go to ')
                )
             )    
            );


            $wp_customize->add_section('ileys_partner_section',
        
            array(
                'title'=>('Partner section '),
                'description'=> esc_attr('Choose Posts that appear on section'),
                'panel'=>'ileys_section_panel'
            )
        );
    
                $wp_customize->add_setting( 'ileys_category_partner_setting',
                array(
                'default' => 0,
                'transport' => 'refresh',
                "type"=>'theme_mod',
                'sanitize_callback' => 'absint',
                'priority'=>1
                )
            );
    
    
                $wp_customize->add_control(new My_Dropdown_Category_Control($wp_customize,'ileys_category_partner_setting',
            
                array(
                   'label'=>__('Category to chose posts from'),
                   'description'=>esc_html__('Optionally enter cateogry to choose posts from '),
                   'section'=>'ileys_partner_section',

                )    
            )
        );
    
}

add_action('customize_register','ileys_customize_register');

function my_sanitize_image( $input ){
 
    /* default output */
    $output = '';
 
    /* check file type */
    $filetype = wp_check_filetype( $input );
    $mime_type = $filetype['type'];
 
    /* only mime type "image" allowed */
    if ( strpos( $mime_type, 'image' ) !== false ){
        $output = $input;
    }
 
    return $output;
}

function ileys_theme_sanitize_checkbox ($checked){
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}