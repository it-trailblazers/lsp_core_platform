<?php

/**
 * Platform Settings
 *
 * Set install profile and config export
 * This will install LSP profile by default
 */

// Get profile.
$site_profile = basename(glob(DRUPAL_ROOT . '/profiles/contrib/*_profile', GLOB_ONLYDIR)[0]);

// Set default config sync folder.
$config_sync_folder = "profiles/contrib/$site_profile/config/sync";

// Set install profile.
$settings['install_profile'] = $site_profile;

$config_directories = [CONFIG_SYNC_DIRECTORY => $config_sync_folder];