<?php

namespace BrightRobots\GravityForms\AutoCompleteOff;

use BrightRobots\GravityForms\AutoCompleteOff\Lang\LoadPluginLanguage;
use BrightRobots\GravityForms\AutoCompleteOff\Admin\FieldSetting;
use BrightRobots\GravityForms\AutoCompleteOff\Admin\FormSetting;
use BrightRobots\GravityForms\AutoCompleteOff\Render\FormField;
use BrightRobots\GravityForms\AutoCompleteOff\Render\FormTag;

/**
 * Class Hooks
 *
 * This class is in charge of loading in all the parts
 * of this plugin and hooking them into the right WordPress
 * and Gravity Forms hooks and filters.
 *
 * As we only want to load these Hooks once, this class is
 * therefore a singleton class that can only be initialised
 * once calling `Hooks::init();`
 *
 * @package BrightRobots\GravityForms\AutoCompleteOff
 */
class Hooks {
	public static function init() {
		static $inst = null;

		if ( $inst === null ) {
			$inst = new Hooks();
		}

		return $inst;
	}

	private function __clone() {
	}

	private function __construct() {
		$lang = new LoadPluginLanguage();
		add_action( 'plugins_loaded', array( $lang, 'load' ) );

		$fieldSetting = new FieldSetting();
		add_action( 'gform_field_advanced_settings', array( $fieldSetting, 'markup' ) );
		add_action( 'gform_editor_js', array( $fieldSetting, 'js' ) );

		$formSetting = new FormSetting();
		add_action( 'gform_form_settings', array( $formSetting, 'markup' ), 10, 2 );
		add_action( 'gform_pre_form_settings_save', array( $formSetting, 'save' ) );

		$formField = new FormField();
		add_filter( 'gform_field_content', array( $formField, 'addAutoCompleteSetting' ), 11, 2 );

		$formTag = new FormTag();
		add_action( 'gform_form_tag', array( $formTag, 'addAutoCompleteSetting' ), 11, 2 );
	}
}
