<?php
/**
 * Auto Complete Off for Gravity Forms
 *
 * @package     brightrobots/gf-autocomplete-off
 * @author      Scott Cariss
 * @copyright   2016 Scott Cariss
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Auto Complete Off for Gravity Forms
 * Plugin URI:  https://github.com/brightrobots/gf-autocomplete-off
 * Description: Adds to Gravity Forms the capability to turn off autocomplete on a given form or form input.
 * Version:     1.0.1
 * Author:      Scott Cariss
 * Author URI:  https://l3rady.com
 * Text Domain: br-sc-gf-aco
 * Domain Path: /assets/languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Auto Complete Off for Gravity Forms is free software: you can redistribute
 * it and/or modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, either version 2 of the
 * License, or any later version.
 *
 * Auto Complete Off for Gravity Forms is distributed in the hope that it will
 * be useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Auto Complete Off for Gravity Forms.
 * If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
 */

use BrightRobots\GravityForms\AutoCompleteOff\Hooks;

defined( 'ABSPATH' ) or exit;

require_once __DIR__ . '/src/Hooks.php';
require_once __DIR__ . '/src/Lang/LoadPluginLanguage.php';
require_once __DIR__ . '/src/Admin/FieldSetting.php';
require_once __DIR__ . '/src/Admin/FormSetting.php';
require_once __DIR__ . '/src/Render/FormField.php';
require_once __DIR__ . '/src/Render/FormTag.php';

Hooks::init();
