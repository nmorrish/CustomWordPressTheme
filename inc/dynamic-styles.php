<?php 
  header("Content-type: text/css"); //allows this php file to be treated like a css file
  require_once(realpath(__DIR__ . DIRECTORY_SEPARATOR . '../../../..' ) . '\wp-load.php' ); //wordpress is not loaded in this file by default. This ensures that it is.

  $tintRGBA = get_theme_mod('main_page_tint_rgba','rgba(110,110,110,0.2)');

  function hexToRgb($hex) {
    $r = hexdec(substr($hex,1,2));
    $g = hexdec(substr($hex,3,2));
    $b = hexdec(substr($hex,5,2));
    return  $r . ' , ' . $g . ' , ' . $b ;
  }

  function adjustBrightness($hex) {
    // Steps should be between -255 and 255. Negative = darker, positive = lighter
    $steps = 80;
    $steps = max(-255, min(255, $steps));

    // Normalize into a six character long hex string
    $hex = str_replace('#', '', $hex);
    if (strlen($hex) == 3) {
        $hex = str_repeat(substr($hex,0,1), 2).str_repeat(substr($hex,1,1), 2).str_repeat(substr($hex,2,1), 2);
    }

    // Split into three parts: R, G and B
    $color_parts = str_split($hex, 2);
    if((hexdec($color_parts[0]) + hexdec($color_parts[1]) + hexdec($color_parts[2])) >= 500){
      $steps = $steps * -1;
    }
    $return = '#';

    foreach ($color_parts as $color) {
        $color   = hexdec($color); // Convert to decimal
        $color   = max(0,min(255,$color + $steps)); // Adjust color
        $return .= str_pad(dechex($color), 2, '0', STR_PAD_LEFT); // Make two char hex code
    }

    return $return;
}
?>
:root {
/*Theme specific styles */
  --main-page-tint: <?= $tintRGBA?>;

/* Bootstrap */
  --bs-blue: #0d6efd;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-red: #dc3545;
  --bs-orange: #fd7e14;
  --bs-yellow: #ffc107;
  --bs-green: #198754;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-white: #fff;
  --bs-gray: #6c757d;
  --bs-gray-dark: #343a40;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #6c757d;
  --bs-gray-700: #495057;
  --bs-gray-800: #343a40;
  --bs-gray-900: #212529;
  --bs-primary: <?= get_theme_mod('water_theme_primary_color','#0d6efd')?>;
  --bs-primary-hover: <?= adjustBrightness(get_theme_mod('water_theme_primary_color','#0d6efd'))?>;
  --bs-secondary: <?= get_theme_mod('water_theme_secondary_color','#6c757d')?>;
  --bs-secondary-hover: <?= adjustBrightness(get_theme_mod('water_theme_secondary_color','#6c757d'))?>;
  --bs-success: <?= get_theme_mod('water_theme_success_color','#198754')?>;
  --bs-info: <?= get_theme_mod('water_theme_info_color','#0dcaf0')?>;
  --bs-warning: <?= get_theme_mod('water_theme_warning_color','#ffc107')?>;
  --bs-danger: <?= get_theme_mod('water_theme_danger_color','#dc3545')?>;
  --bs-light: <?= get_theme_mod('water_theme_light_color','#f8f9fa')?>;
  --bs-dark: <?= get_theme_mod('water_theme_dark_color','#212529')?>;
  --bs-primary-rgb: <?= hexToRgb(get_theme_mod('water_theme_primary_color','#0d6efd'))?>;
  --bs-secondary-rgb: <?= hexToRgb(get_theme_mod('water_theme_secondary_color','#6c757d'))?>;
  --bs-success-rgb: <?= hexToRgb(get_theme_mod('water_theme_success_color','#198754'))?>;
  --bs-info-rgb: <?= hexToRgb(get_theme_mod('water_theme_info_color','#0dcaf0'))?>;
  --bs-warning-rgb: <?= hexToRgb(get_theme_mod('water_theme_warning_color','#ffc107'))?>;
  --bs-danger-rgb: <?= hexToRgb(get_theme_mod('water_theme_danger_color','#dc3545'))?>;
  --bs-light-rgb: <?= hexToRgb(get_theme_mod('water_theme_light_color','#f8f9fa'))?>;
  --bs-dark-rgb: <?= hexToRgb(get_theme_mod('water_theme_dark_color','#212529'))?>;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 33, 37, 41;
  --bs-body-bg-rgb: 255, 255, 255;
  --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 1rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #212529;
  --bs-body-bg: #fff;

  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;

  /* Font Sizes */
  --font-normal: 1em;
  --font-small: 0.8125rem;

  /* Sidebar */
  --sidebar-width: 280px;
  --content-max-width: 860px;
}
