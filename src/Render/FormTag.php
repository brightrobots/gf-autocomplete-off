<?php

namespace BrightRobots\GravityForms\AutoCompleteOff\Render;

class FormTag {
	public function addAutoCompleteSetting( $form_tag, $form ) {
		if ( !isset( $form['br-sc-autocomplete'] ) || $form['br-sc-autocomplete'] !== 'off' ) {
			$autoComplete = 'on';
		}
		else {
			$autoComplete = 'off';
		}

		return str_replace( '>', ' autocomplete="' . $autoComplete . '">', $form_tag );
	}
}
