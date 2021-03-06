<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> · <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/docs/css/style.min.css">

    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/docs/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/docs/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/docs/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php bloginfo('template_directory');?>/docs/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo('template_directory');?>/docs/safari-pinned-tab.svg" color="#9013fe">
    <meta name="theme-color" content="#ffffff"> -->

    <!-- OG Fb -->
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:image" content="https://cto-security-checklist.sqreen.io/images/fb-share.jpg">
    <meta property="og:description" content="<?php echo get_the_excerpt($post->ID); ?>">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="SqreenIO">

    <!-- OG Tw -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@SqreenIO">
    <meta name="twitter:creator" content="@SqreenIO">
    <meta name="twitter:url" content="<?php echo home_url(); ?>">
    <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
    <meta name="twitter:description" content="<?php echo get_the_excerpt($post->ID); ?>">
    <meta name="twitter:image" content="https://cto-security-checklist.sqreen.io/images/tw-share.jpg">
    
    <?php wp_head(); ?>

  </head>