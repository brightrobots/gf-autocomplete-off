<?php

namespace BrightRobots\GravityForms\AutoCompleteOff\Render;

class FormTag {
	public function addAutoCompleteSetting( $form_tag, $form ) {
		$autoComplete = (
			!isset( $form['brScAutoComplete'] )
			|| $form['brScAutoComplete'] !== 'off'
		) ? 'on' : 'off';

		return str_replace( '>', ' autocomplete="' . $autoComplete . '">', $form_tag );
	}
}
