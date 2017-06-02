<?php
/**
 * Plugin Name: WooCommerce Subscriptions Load Deprecation Handlers
 * Plugin URI: https://github.com/Prospress/woocommerce-subscriptions-load-deprecation-handlers
 * Description: Load backward compatibility support in Subscriptions 2.1 for hooks deprecated in Subscriptions 2.0.
 * Author: Prospress Inc.
 * Version: 1.0
 * Author URI: http://prospress.com
 * License: GPLv3
 *
 * GitHub Plugin URI: Prospress/woocommerce-subscriptions-load-deprecation-handlers
 * GitHub Branch: master
 *
 * Copyright 2017 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package		WooCommerce Subscriptions
 * @author		Prospress Inc.
 * @since		1.0
 */

function wcs_load_deprecation_handlers() {
	add_filter( 'woocommerce_subscriptions_load_deprecation_handlers', '__return_true' );
}
add_action( 'plugins_loaded', 'wcs_load_deprecation_handlers', 0 );
