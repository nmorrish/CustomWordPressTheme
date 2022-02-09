
  <?php
  
  function nickm_customize_register( $wp_customize ) {
    //Default homepage settings will be nested under a panel and renamed to 'general settings'
    //default sections are: title_tagline, colors, header_image, background_image, nav, and static_front_page
    $wp_customize->get_section( 'static_front_page' )->panel  = 'water_homepage_settings_panel';
    $wp_customize->get_section( 'static_front_page' )->title  = 'General Settings';

    //Panel for all homepage settings
    $wp_customize->add_panel( 'water_homepage_settings_panel', 
                              array(
                                  'title'            => __( 'Homepage Settings', 'water_h' ),
                                  'description'      => __( 'Modifications to the Homepage can be made here', 'water_h' ),
                              ));

    #region Homepage action buttons

    #region 1st Action Button
    $wp_customize->add_section( 'water_home_action_button_1', array(
      'title' => __( 'Action Button 1' ),
      'description' => __( 'Create a button to bring the user to other parts of the site' ),
      'panel'         => 'water_homepage_settings_panel',
      'capability' => 'edit_theme_options' ));

    $wp_customize->add_setting( 'water_home_action_button_1_setting', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ));

    $wp_customize->add_control( 'water_home_action_button_1_setting', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'water_home_action_button_1',
            'label'       => 'Button Text',
            'description' => 'Display Text of the first button',
        ));
    #endregion

    #region 2nd Action Button
    $wp_customize->add_section( 'water_home_action_button_2', array(
      'title' => __( 'Action Button 2' ),
      'description' => __( 'Create a button to bring the user to other parts of the site' ),
      'panel'         => 'water_homepage_settings_panel',
      'capability' => 'edit_theme_options' ));

    $wp_customize->add_setting( 'water_home_action_button_2_setting', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ));

    $wp_customize->add_control( 'water_home_action_button_2_setting', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'water_home_action_button_2',
            'label'       => 'Button Text',
            'description' => 'Display Text of the second button',
        ));
    #endregion

    #region 3rd Action Button
    $wp_customize->add_section( 'water_home_action_button_3', array(
      'title' => __( 'Action Button 3' ),
      'description' => __( 'Create a button to bring the user to other parts of the site' ),
      'panel'         => 'water_homepage_settings_panel',
      'capability' => 'edit_theme_options' ));

    $wp_customize->add_setting( 'water_home_action_button_3_setting', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ));

    $wp_customize->add_control( 'water_home_action_button_3_setting', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'water_home_action_button_3',
            'label'       => 'Button Text',
            'description' => 'Display Text of the third button',
        ));
    #endregion
    #endregion

    #region Homepage background image settings
    $wp_customize->add_section( 'water_home_image_settings', 
          array(
              'title'         => __( 'Background Image Settings' ),
              'description' => __( 'Specify images from your media library to display on your main page. They will cycle using the times specified in milliseconds (1 second = 1000 milliseconds). Up to 6 images can be selected' ),
              'priority'      => 1,
              'panel'         => 'water_homepage_settings_panel',
              'capability' => 'edit_theme_options',
          ));

    $wp_customize->add_setting( 'water_home_slider_image_time_between', 
          array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => '1500',
            'transport' => 'refresh', // or postMessage
            'sanitize_callback' => 'absint',
            ));

    $wp_customize->add_control( 
            new WP_Customize_Cropped_Image_Control(
              $wp_customize,
              'water_home_slider_image_time_between',
              array(
                  'label'      => __( 'Time between images (milliseconds)' ),
                  'section'    => 'water_home_image_settings',
                  'type' => 'number'
              )
          ));

    $wp_customize->add_setting( 'water_home_slider_image_time_fade',array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '6000',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'absint',
        ));

    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_time_fade',
            array(
                'label'      => __( 'Image fade time (milliseconds)' ),
                'section'    => 'water_home_image_settings',
                'type' => 'number'
            )
        ));

    //add settings for the home page slider selector
    $wp_customize->add_setting( 'water_home_slider_image_1', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ) );

    $wp_customize->add_setting( 'water_home_slider_image_2', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ));

    $wp_customize->add_setting( 'water_home_slider_image_3', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ));

    $wp_customize->add_setting( 'water_home_slider_image_4', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ));

    $wp_customize->add_setting( 'water_home_slider_image_5', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ) );

    $wp_customize->add_setting( 'water_home_slider_image_6',   array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ));

    //Add the image control
    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_1',
            array(
                'label'      => __( '1st image' ),
                'section'    => 'water_home_image_settings',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        ));

    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_2',
            array(
                'label'      => __( '2nd image'),
                'section'    => 'water_home_image_settings',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        ));

    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_3',
            array(
                'label'      => __( '3rd image' ),
                'section'    => 'water_home_image_settings',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        ));

    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_4',
            array(
                'label'      => __( '4th image'),
                'section'    => 'water_home_image_settings',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        ));

    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_5',
            array(
                'label'      => __( '5th image'),
                'section'    => 'water_home_image_settings',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        ));

    $wp_customize->add_control( 
          new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'water_home_slider_image_6',
            array(
                'label'      => __( '6th image'),
                'section'    => 'water_home_image_settings',
                'height'=>100, // cropper Height
                'width'=>100, // Cropper Width
                'flex_width'=>true, //Flexible Width
                'flex_height'=>true, // Flexible Heiht
            )
        ));

    #endregion

  }
  add_action( 'customize_register', 'nickm_customize_register' );

  ?>