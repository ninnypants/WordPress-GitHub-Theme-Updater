<?php

add_action('init', 'github_theme_updater_test_init');
function github_theme_updater_test_init() {

	include_once('updater.php');

	define('WP_GITHUB_FORCE_UPDATE', true);

	if (is_admin()) { // note the use of is_admin() to double check that this is happening in the admin

		$config = array(
			'proper_folder_name' => 'github-updater',
			'api_url' => 'https://api.github.com/repos/ninnypants/WordPress-GitHub-Theme-Updater',
			'raw_url' => 'https://raw.github.com/ninnypants/WordPress-GitHub-Theme-Updater/master/style.css',
			'github_url' => 'https://github.com/ninnypants/WordPress-GitHub-Theme-Updater',
			'zip_url' => 'https://github.com/ninnypants/WordPress-GitHub-Theme-Updater/zipball/master',
			'sslverify' => true,
			'requires' => '3.0',
			'tested' => '3.3',
			'readme' => 'readme.txt'
		);

		new WPGitHubThemeUpdater($config);

	}

}