<?php

namespace BrightRobots\GravityForms\AutoCompleteOff\Render;

class FormField {
	public function addAutoCompleteSetting( $input, $field ) {
		$autoComplete = (
			!isset( $field['brScAutoComplete'] )
			|| $field['brScAutoComplete'] !== 'off'
		) ? 'on' : 'off';

		return preg_replace( '/<(input|textarea)/', '<${1} autocomplete="' . $autoComplete . '" ', $input );
	}
}
