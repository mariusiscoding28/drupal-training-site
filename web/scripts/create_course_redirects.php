<?php

/**
 * Script to programmatically create redirects for Training Course nodes.
 *
 * Run this using `drush php:script create_course_redirects.php`
 */

use Drupal\redirect\Entity\Redirect;

$nids = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($nids as $nid) {
  $existing = \Drupal::entityTypeManager()
    ->getStorage('redirect')
    ->loadByProperties([
      'redirect_source__path' => "/node/$nid",
    ]);

  if (empty($existing)) {
    $redirect = Redirect::create([
      'redirect_source' => "/node/$nid",
      'redirect_redirect' => "internal:/course/$nid/view",
      'status_code' => 301,
    ]);
    $redirect->save();
    echo "Redirect created: /node/$nid → /course/$nid/view\n";
  } else {
    echo "Redirect already exists for /node/$nid\n";
  }
}

