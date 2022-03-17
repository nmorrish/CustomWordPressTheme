
  <?php
  function nickm_customize_register( $wp_customize ) {

    //Load in the alpha color picker plugin and create an array of colors for it to use
    require_once( dirname( __FILE__ ) . '/../assets/alpha-color-picker/alpha-color-picker.php' );
    $colorPickerPalette = array(
      get_theme_mod('water_theme_primary_color','#0d6efd'),
      get_theme_mod('water_theme_secondary_color','#6c757d'),
      get_theme_mod('water_theme_success_color','#198754'),
      get_theme_mod('water_theme_info_color','#0dcaf0'),
      get_theme_mod('water_theme_warning_color','#ffc107'),
      get_theme_mod('water_theme_danger_color','#dc3545')
    );
    
    //Default homepage settings will be nested under a panel and renamed to 'general settings'
    //default sections are: title_tagline, colors, header_image, background_image, nav, and static_front_page
    $wp_customize->get_section( 'static_front_page' )->panel  = 'water_homepage_settings_panel';
    $wp_customize->get_section( 'static_front_page' )->title  = 'General Settings';

    //Panel for all homepage settings
    $wp_customize->add_panel( 'water_homepage_settings_panel', 
                              array(
                                  'title'            => __( 'Homepage Settings' ),
                                  'description'      => __( 'Modifications to the Homepage can be made here' ),
                              ));

    $wp_customize->add_panel( 'water_theme_settings_panel', 
                              array(
                                  'title'            => __( 'Theme Settings' ),
                                  'description'      => __( 'Adjust general theme settings here' ),
                              ));

    /*Homepage action buttons; 
    Action buttons are the large buttons on the front page.*/
    $buttonColorChoices = array( 
        'primary' => __( 'Primary' ),
        'secondary' => __( 'Secondary' ),
        'success' => __( 'Success' ),
        'danger' => __( 'Danger' ),
        'warning' => __( 'Warning' ),
        'info' => __( 'Info' ),
        'light' => __( 'Light' ),
        'dark' => __( 'Dark' )
      );
    #region 1st Homepage Action Button
    $wp_customize->add_section( 'water_home_action_button_1', array(
      'title' => __( 'Action Button 1' ),
      'description' => __( 'Create a button to bring the user to other parts of the site' ),
      'panel'         => 'water_homepage_settings_panel',
      'capability' => 'edit_theme_options' ));

    $wp_customize->add_setting( 'water_home_action_button_1_text', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ));

    $wp_customize->add_control( 'water_home_action_button_1_text', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'water_home_action_button_1',
            'label'       => 'Button Text',
            'description' => 'Display Text of the first button',
        ));

    $wp_customize->add_setting( 'water_home_action_button_1_uri', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_url_raw',
        ));

    $wp_customize->add_control( 'water_home_action_button_1_uri', 
        array(
            'type'        => 'url',
            'priority'    => 10,
            'section'     => 'water_home_action_button_1',
            'label'       => 'Button URI',
            'description' => 'Link to the page associated with this button',
        ));

    $wp_customize->add_setting( 'water_home_action_button_1_color', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'primary',
        'transport' => 'refresh', // or postMessage
        //'sanitize_callback' => 'sanitize_radio',
        ));

    $wp_customize->add_control( 'water_home_action_button_1_color', 
        array(
            'type'        => 'radio',
            'priority'    => 10,
            'section'     => 'water_home_action_button_1',
            'label'       => 'Button Style',
            'description' => 'The button color',
            'choices' => $buttonColorChoices
        ));

    $wp_customize->add_setting( 'water_home_action_button_1_outline', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'false',
        'transport' => 'refresh', // or postMessage
        //'sanitize_callback' => 'sanitize_checkbox',
        ));

    $wp_customize->add_control( 'water_home_action_button_1_outline', 
        array(
            'type'        => 'checkbox',
            'priority'    => 10,
            'section'     => 'water_home_action_button_1',
            'label'       => 'Solid Button',
            'description' => 'Check to make button solid',
        ));
    #endregion

    #region 2nd Homepage Action Button
    $wp_customize->add_section( 'water_home_action_button_2', array(
      'title' => __( 'Action Button 2' ),
      'description' => __( 'Create a button to bring the user to other parts of the site. Leave button text blank to omit button.' ),
      'panel'         => 'water_homepage_settings_panel',
      'capability' => 'edit_theme_options' ));

    $wp_customize->add_setting( 'water_home_action_button_2_text', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ));

    $wp_customize->add_control( 'water_home_action_button_2_text', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'water_home_action_button_2',
            'label'       => 'Button Text',
            'description' => 'Display Text of the first button',
        ));

    $wp_customize->add_setting( 'water_home_action_button_2_uri', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_url_raw',
        ));

    $wp_customize->add_control( 'water_home_action_button_2_uri', 
        array(
            'type'        => 'url',
            'priority'    => 10,
            'section'     => 'water_home_action_button_2',
            'label'       => 'Button URI',
            'description' => 'Link to the page associated with this button',
        ));

    $wp_customize->add_setting( 'water_home_action_button_2_color', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'primary',
        'transport' => 'refresh', // or postMessage
        //'sanitize_callback' => 'sanitize_radio',
        ));

    $wp_customize->add_control( 'water_home_action_button_2_color', 
            array(
                'type'        => 'radio',
                'priority'    => 10,
                'section'     => 'water_home_action_button_2',
                'label'       => 'Button Style',
                'description' => 'The button color',
                'choices' => $buttonColorChoices
            ));
    
    $wp_customize->add_setting( 'water_home_action_button_2_outline', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'false',
        'transport' => 'refresh', // or postMessage
        //'sanitize_callback' => 'sanitize_checkbox',
        ));

    $wp_customize->add_control( 'water_home_action_button_2_outline', 
        array(
            'type'        => 'checkbox',
            'priority'    => 10,
            'section'     => 'water_home_action_button_2',
            'label'       => 'Solid Button',
            'description' => 'Check to make button solid',
        ));
    #endregion

    #region 3rd Homepage Action Button
    $wp_customize->add_section( 'water_home_action_button_3', array(
      'title' => __( 'Action Button 3' ),
      'description' => __( 'Create a button to bring the user to other parts of the site. Leave button text blank to omit button.' ),
      'panel'         => 'water_homepage_settings_panel',
      'capability' => 'edit_theme_options' ));

    $wp_customize->add_setting( 'water_home_action_button_3_text', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
        ));

    $wp_customize->add_control( 'water_home_action_button_3_text', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'water_home_action_button_3',
            'label'       => 'Button Text',
            'description' => 'Display Text of the first button',
        ));

    $wp_customize->add_setting( 'water_home_action_button_3_uri', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_url_raw',
        ));

    $wp_customize->add_control( 'water_home_action_button_3_uri', 
        array(
            'type'        => 'url',
            'priority'    => 10,
            'section'     => 'water_home_action_button_3',
            'label'       => 'Button URI',
            'description' => 'Link to the page associated with this button',
        ));

    $wp_customize->add_setting( 'water_home_action_button_3_color', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'primary',
        'transport' => 'refresh', // or postMessage
        //'sanitize_callback' => 'sanitize_radio',
        ));

    $wp_customize->add_control( 'water_home_action_button_3_color', 
            array(
                'type'        => 'radio',
                'priority'    => 10,
                'section'     => 'water_home_action_button_3',
                'label'       => 'Button Style',
                'description' => 'The button color',
                'choices' => $buttonColorChoices
            ));
    
    $wp_customize->add_setting( 'water_home_action_button_3_outline', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'false',
        'transport' => 'refresh', // or postMessage
        //'sanitize_callback' => 'sanitize_checkbox',
        ));

    $wp_customize->add_control( 'water_home_action_button_3_outline', 
        array(
            'type'        => 'checkbox',
            'priority'    => 10,
            'section'     => 'water_home_action_button_3',
            'label'       => 'Solid Button',
            'description' => 'Check to make button solid',
        ));
    #endregion
    /*End Homepage action buttons*/

    #region Homepage background image settings

    $wp_customize->add_section( 'water_home_image_settings', 
          array(
              'title'         => __( 'Background Image Settings' ),
              'description' => __( 'Specify images from your media library to display on your main page. They will cycle using the times specified in milliseconds (1 second = 1000 milliseconds). Up to 6 images can be selected.    You may also specify apply a color tint.' ),
              'priority'      => 1,
              'panel'         => 'water_homepage_settings_panel',
              'capability' => 'edit_theme_options',
          ));

    $wp_customize->add_setting('main_page_tint_rgba',
      array(
        'default'     => 'rgba(110,110,110,0.2)',
        'type'        => 'theme_mod',
        'capability'  => 'edit_theme_options',
        'transport'   => 'postMessage'
      )
    );
  
    // Alpha Color Picker control.
    $wp_customize->add_control( new Customize_Alpha_Color_Control(
        $wp_customize,
        'alpha_color_control',
        array(
          'label'         => __( 'Background image tint'),
          'section'       => 'water_home_image_settings',
          'settings'      => 'main_page_tint_rgba',
          'show_opacity'  => true, // Optional.
          'palette'	=> $colorPickerPalette
        )
      )
    );

    // $wp_customize->add_setting( 'main_page_tint_color', 
    //   array(
    //     'type' => 'theme_mod',
    //     'capability' => 'edit_theme_options',
    //     'default' => '#cccccc',
    //     'transport' => 'refresh', // or postMessage
    //     'sanitize_callback' => 'sanitize_hex_color',
    //     ));

    // $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_page_tint_color',
    //     array(
    //           'label' => __( 'Background Image Tint' ),
    //           'description' => __('Add a colored tint to the background images'),
    //           'section' => 'water_home_image_settings',
    //           'capability' => 'edit_theme_options',
    //           'type'        => 'color',
    //   )));

    // $wp_customize->add_setting( 'main_page_tint_opacity', 
    //   array(
    //     'type' => 'theme_mod',
    //     'capability' => 'edit_theme_options',
    //     'default' => '20',
    //     'transport' => 'refresh', 
    //     'sanitize_callback' => 'absint',
    //     ));

    // $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_page_tint_opacity',
    //     array(
    //           'label' => __( 'Tint Opacity' ),
    //           'description' => __('100 is opaque, 0 is transparent'),
    //           'section' => 'water_home_image_settings',
    //           'capability' => 'edit_theme_options',
    //           'type'        => 'number',
    //   )));

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

    //These settings control each image that can be placed on the main page background
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

    //These are the controls that allow adding each image
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

    #region Theme Options
    $wp_customize->add_section( 'water_theme_colors', array(
      'title' => __( 'Theme Colours' ),
      'description' => __( 'General color settings for the theme. Follows the pattern used for buttons in Bootstrap' ),
      'panel'         => 'water_theme_settings_panel',
      'capability' => 'edit_theme_options' ));

    /* Primary Color */
    $wp_customize->add_setting( 'water_theme_primary_color', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '#0d6efd',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_hex_color',
        ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'water_theme_primary_color',
        array(
             'label' => __( 'Primary Theme Color' ),
             'description' => __('The primary color of the theme. This affects menus, navigation bars, and backgrounds'),
             'section' => 'water_theme_colors',
             'capability' => 'edit_theme_options',
             'type'        => 'color',
     )));

     /* Secondary Color */
    $wp_customize->add_setting( 'water_theme_secondary_color', 
      array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '#6c757d',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_hex_color',
        ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'water_theme_secondary_color',
        array(
             'label' => __( 'Secondary Theme Color' ),
             'description' => __('The secondary color of the theme. This affects trim and highlights'),
             'section' => 'water_theme_colors',
             'capability' => 'edit_theme_options',
             'type'        => 'color',
     )));

     /* Success Color */
    $wp_customize->add_setting( 'water_theme_success_color', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => '#198754',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => 'sanitize_hex_color',
      ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'water_theme_success_color',
        array(
            'label' => __( 'Success Color' ),
            'description' => __('The color associated with positive outcomes. For buttons and messages'),
            'section' => 'water_theme_colors',
            'capability' => 'edit_theme_options',
            'type'        => 'color',  )));

    /* Info Color */
    $wp_customize->add_setting( 'water_theme_info_color', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => '#0dcaf0',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => 'sanitize_hex_color',
      ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'water_theme_info_color',
        array(
            'label' => __( 'Info Color' ),
            'description' => __('The color of information bulletins. For buttons and messages'),
            'section' => 'water_theme_colors',
            'capability' => 'edit_theme_options',
            'type'        => 'color', )));

    /* Warning Color */
    $wp_customize->add_setting( 'water_theme_warning_color', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => '#ffc107',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => 'sanitize_hex_color',
      ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'water_theme_warning_color',
        array(
            'label' => __( 'Warning Color' ),
            'description' => __('The color of low danger alerts. For buttons and messages'),
            'section' => 'water_theme_colors',
            'capability' => 'edit_theme_options',
            'type'        => 'color',  )));

    /* Danger Color */
    $wp_customize->add_setting( 'water_theme_danger_color', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => '#dc3545',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => 'sanitize_hex_color', ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'water_theme_danger_color', array(
            'label' => __( 'Danger Color' ),
            'description' => __('The color of high danger alerts. For buttons and messages'),
            'section' => 'water_theme_colors',
            'capability' => 'edit_theme_options',
            'type'        => 'color',)));

    /* Light Color */
    $wp_customize->add_setting( 'water_theme_light_color', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => '#f8f9fa',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => 'sanitize_hex_color',));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'water_theme_light_color',array(
            'label' => __( 'Light Color' ),
            'description' => __('The color used for sections using light colors'),
            'section' => 'water_theme_colors',
            'capability' => 'edit_theme_options',
            'type'        => 'color', )));

    /* Dark Color */
    $wp_customize->add_setting( 'water_theme_dark_color',  array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => '#212529',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => 'sanitize_hex_color', ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'water_theme_dark_color',array(
            'label' => __( 'Dark Color' ),
            'description' => __('The color used for sections using dark colors'),
            'section' => 'water_theme_colors',
            'capability' => 'edit_theme_options',
            'type'        => 'color',)));

    // $wp_customize->add_control( 'water_theme_primary_color', 
    //     array(
    //       'type'        => 'color',
    //       'priority'    => 10,
    //       'section'     => 'water_home_action_button_1',
    //       'label'       => 'Button Text',
    //       'description' => 'Display Text of the first button',
    //   ));
    #endregion
  }
  add_action( 'customize_register', 'nickm_customize_register' );


  ?>