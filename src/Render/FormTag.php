<?php

namespace BrightRobots\GravityForms\AutoCompleteOff\Render;

class FormTag {
	public function addAutoCompleteSetting( $form_tag, $form ) {
		if ( !isset( $form['brScAutoComplete'] ) || $form['brScAutoComplete'] !== 'off' ) {
			$autoComplete = 'on';
		}
		else {
			$autoComplete = 'off';
		}

		return str_replace( '>', ' autocomplete="' . $autoComplete . '">', $form_tag );
	}
}
