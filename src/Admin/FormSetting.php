<?php
namespace BrightRobots\GravityForms\AutoCompleteOff\Admin;

/**
 * Class FormSetting
 *
 * Adds in the markup and logic to Gravity Forms so that
 * an extra setting is added to the form settings screen.
 *
 * @package BrightRobots\GravityForms\AutoCompleteOff\Admin
 */
class FormSetting {
	/**
	 * @param $settings array Form setting
	 * @param $form     array Form
	 *
	 * @return array
	 */
	public function markup( $settings, $form ) {
		$settings['Form Options']['brScAutoComplete'] = '<tr>
            <th>
                ' . esc_html__( 'Browser auto complete', 'br-sc-gf-aco' ) . '
            </th>
            <td>
                <input
                    type="checkbox"
                    id="gform_turn_off_autocomplete"
                    name="brScAutoComplete"
                    value="off"
                    ' . checked( rgar( $form, 'brScAutoComplete' ), 'off', false ) . ' 
                 />
                <label for="gform_turn_off_autocomplete">
                    ' . esc_html__( 'Disable browser auto complete', 'br-sc-gf-aco' ) . '
                </label>
            </td>
        </tr>';

		return $settings;
	}

	/**
	 * @param $form array
	 *
	 * @return array
	 */
	public function save( $form ) {
		$form['brScAutoComplete'] = ( rgpost( 'brScAutoComplete' ) === 'off' ) ? 'off' : 'on';

		return $form;
	}
}
