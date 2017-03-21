<?php
/*
Plugin Name: Wordpress Plugin Skeleton
Plugin URI: http://menthol-inc.com/
Description: Basic plugin setup
Version: 1.0
Author: I ♥ Menthol
Text Domain: mint
Domain Path: /languages
*/

if ( is_admin() ) {
  //include the files used in the admin
  //like plugin options/settings
  require_once('admin/index.php');
} else {
  //include de files used in the front part
  require_once('front/index.php');
}//-if
