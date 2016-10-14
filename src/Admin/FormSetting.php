<?php
namespace BrightRobots\GravityForms\AutoCompleteOff\Admin;

class FormSetting {
	public function markup( $settings, $form ) {
		$settings['Form Options']['br-sc-autocomplete'] = '<tr>
            <th>
                ' . esc_html__( 'Browser auto complete', 'br-sc-gf-aco' ) . '
            </th>
            <td>
                <input
                    type="checkbox"
                    id="gform_turn_off_autocomplete"
                    name="br-sc-autocomplete"
                    value="off"
                    ' . checked( rgar( $form, 'br-sc-autocomplete' ), 'off', false ) . ' 
                 />
                <label for="gform_turn_off_autocomplete">
                    ' . esc_html__( 'Disable browser auto complete', 'br-sc-gf-aco' ) . '
                </label>
            </td>
        </tr>';

		return $settings;
	}

	public function save( $form ) {
		$form['br-sc-autocomplete'] = ( rgpost( 'br-sc-autocomplete' ) === 'off' ) ? 'off' : 'on';

		return $form;
	}
}
