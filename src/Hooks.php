<?php

namespace BrightRobots\GravityForms\AutoCompleteOff;

use BrightRobots\GravityForms\AutoCompleteOff\Admin\FieldSetting;
use BrightRobots\GravityForms\AutoCompleteOff\Admin\FormSetting;
use BrightRobots\GravityForms\AutoCompleteOff\Render\FormField;
use BrightRobots\GravityForms\AutoCompleteOff\Render\FormTag;

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
