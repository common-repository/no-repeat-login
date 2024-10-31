<?php
/*

**************************************************************************

Plugin Name:  No Repeat Login
Plugin URI:   http://www.arefly.com/no-repeat-login/
Description:  Redirect the user who have already login from login.php to Admin Panel. 將已經登陸的用戶從登陸頁面跳轉至控制台
Version:      1.0.2
Author:       Arefly
Author URI:   http://www.arefly.com/

**************************************************************************

	Copyright 2014  Arefly  (email : eflyjason@gmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

**************************************************************************/

define("NO_REPEAT_LOGIN_PLUGIN_URL", plugin_dir_url( __FILE__ ));
define("NO_REPEAT_LOGIN_FULL_DIR", plugin_dir_path( __FILE__ ));
define("NO_REPEAT_LOGIN_TEXT_DOMAIN", "no-repeat-login");

function no_repeat_login() {
	if(is_user_logged_in()) {
		wp_redirect(admin_url());
		exit;
	}
}
add_action('login_init', 'no_repeat_login');