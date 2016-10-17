<?php

namespace BrightRobots\GravityForms\AutoCompleteOff\Render;

/**
 * Class FormTag
 *
 * Adds the autocomplete markup to form tag
 *
 * @package BrightRobots\GravityForms\AutoCompleteOff\Render
 */
class FormTag {
	/**
	 * @param $form_tag string Form tag HTML markup
	 * @param $form     array Form settings
	 *
	 * @return string
	 */
	public function addAutoCompleteSetting( $form_tag, $form ) {
		$autoComplete = (
			!isset( $form['brScAutoComplete'] )
			|| $form['brScAutoComplete'] !== 'off'
		) ? 'on' : 'off';

		return str_replace( '>', ' autocomplete="' . $autoComplete . '">', $form_tag );
	}
}
