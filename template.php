<?php
/**
 * Implements hook_system_info_alter().
 */
function mymodule_system_info_alter(&$info, $file, $type) {
  // Tweak bootstrap so it would be considered as a twig-based theme.
  if ($type == 'theme' && $info['name'] == 'Bootstrap') {
    $info['engine'] = 'twig';
  }
}

/**
 * @file
 * template.php
 */
