<?php

/****************************** Required Files */
require_once(__DIR__ . '/inc/classes/cyn-customize.php');
require_once(__DIR__ . '/inc/classes/cyn-theme-init.php');
require_once(__DIR__ . '/inc/classes/cyn-acf.php');

/***************************** Instance Classes */
$cyn_theme_init = new cyn_theme_init();
$cyn_acf = new cyn_acf();
$cyn_customize = new cyn_customize;
