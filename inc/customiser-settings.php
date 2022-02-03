
  <?php
  
  function nickm_customize_register( $wp_customize ) {
    // $wp_customize->add_section( 'home_slider', array(
    //   'title' => __( 'Home Page Slider' ),
    //   'description' => __( 'Customise the slider on the home page' ),
    //   'priority' => 160,
    //   'capability' => 'edit_theme_options',
    // ) );

    //add a setting for the home page slider selector
    $wp_customize->add_setting( 'water_home_slider_image_1', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ) 
    );

    $wp_customize->add_setting( 'water_home_slider_image_2', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ) 
    );

    $wp_customize->add_setting( 'water_home_slider_image_3', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ) 
    );

    $wp_customize->add_setting( 'water_home_slider_image_4', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ) 
    );

    $wp_customize->add_setting( 'water_home_slider_image_5', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ) 
    );

      $wp_customize->add_setting( 'water_home_slider_image_6', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ) 
    );

    //Add the image control
    //default sections are: title_tagline, colors, header_image, background_image, nav, and static_front_page
    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_1',
            array(
                'label'      => __( '1st slider image' ),
                'section'    => 'static_front_page',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        )
    );

    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_2',
            array(
                'label'      => __( '2nd slider image'),
                'section'    => 'static_front_page',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        )
    );

    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_3',
            array(
                'label'      => __( '3rd slider image' ),
                'section'    => 'static_front_page',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        )
    );

    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_4',
            array(
                'label'      => __( '4th slider image'),
                'section'    => 'static_front_page',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        )
    );

    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_5',
            array(
                'label'      => __( '5th slider image'),
                'section'    => 'static_front_page',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        )
    );

    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_6',
            array(
                'label'      => __( '6th slider image'),
                'section'    => 'static_front_page',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        )
    );

  }
  add_action( 'customize_register', 'nickm_customize_register' );

  ?>