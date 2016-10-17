<?php
namespace BrightRobots\GravityForms\AutoCompleteOff\Admin;

class FieldSetting {
	public function markup( $position ) {
		if ( $position !== 25 ) {
			return;
		}

		?>
		<li class="label_setting field_setting">
			<input type="checkbox" id="autocomplete_field_setting" value="off">
			<label for="autocomplete_field_setting" class="inline">
				<?php esc_html_e( 'Disable autocomplete for this field', 'br-sc-gf-aco' ); ?>
			</label>
		</li>
		<?php
	}

	public function js() {
		?>
		<script>
			jQuery('#autocomplete_field_setting').on('change', function () {
				if (jQuery(this).is(':checked')) {
					SetFieldProperty('brScAutoComplete', 'off')
				} else {
					SetFieldProperty('brScAutoComplete', 'on')
				}
			});

			jQuery(document).bind('gform_load_field_settings', function (event, field) {
				jQuery('#autocomplete_field_setting').prop('checked', (field['brScAutoComplete'] === 'off'))
			});
		</script>
		<?php
	}
}
