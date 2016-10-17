<?php
namespace BrightRobots\GravityForms\AutoCompleteOff\Lang;

/**
 * Class LoadPluginLanguage
 *
 * Loads in multilingual files for this plugin
 *
 * @package BrightRobots\GravityForms\AutoCompleteOff\Lang
 */
class LoadPluginLanguage {
	public function load() {
		load_plugin_textdomain( 'br-sc-gf-aco', false, 'gravityforms-autocomplete-off/assets/languages/' );
	}
}
