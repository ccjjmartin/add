<?php
/**
 * @file
 * Local settings for this environment.
 */

$conf['preprocess_css'] = 0;
$conf['preprocess_js'] = 0;

$databases = array(
  'default' => array(
    'default' => array(
      'database' => 'drupal',
      'username' => 'drupal',
      'password' => 'drupal',
      'host' => 'localhost',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

$drupal_hash_salt = '';
