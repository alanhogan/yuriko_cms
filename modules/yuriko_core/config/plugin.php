<?php defined('SYSPATH') OR die('No direct access allowed.');
/*
 * Possible definitions for 3rd Party Plugins:
 * 
 * $config[<plugin_dir>] = array
 * (
 *		'name'			=> <plugin_name>,
 *		'dir'			=> <plugin_dir>,
 *		'description'	=> <plugin_description>
 *		'version'		=> <plugin_version>
 *		'dependencies'	=> array
 *		(
 *			'core'				=> array(<version>, <version>)
 *			<another_plugin>	=> <version>,
 *			<and_another>		=> array(<min_version>, <max_version>),
 *		)
 * );
 */