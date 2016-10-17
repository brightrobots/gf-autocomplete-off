<?php

namespace BrightRobots\GravityForms\AutoCompleteOff\Render;

/**
 * Class FormField
 *
 * Adds the autocomplete markup to form fields
 *
 * @package BrightRobots\GravityForms\AutoCompleteOff\Render
 */
class FormField {
	/**
	 * @param $input string Form field HTML markup
	 * @param $field array Form field setting array
	 *
	 * @return string
	 */
	public function addAutoCompleteSetting( $input, $field ) {
		$autoComplete = (
			!isset( $field['brScAutoComplete'] )
			|| $field['brScAutoComplete'] !== 'off'
		) ? 'on' : 'off';

		return preg_replace( '/<(input|textarea)/', '<${1} autocomplete="' . $autoComplete . '" ', $input );
	}
}
