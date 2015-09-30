<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Menu
| -------------------------------------------------------------------------
| This file lets you define navigation menu items on sidebar.
|
*/

$config['menu'] = array(

	'home' => array(
		'name'      => 'Home',
		'url'       => site_url(),
		'icon'      => 'fa fa-home'
	),

	/*
	'user' => array(
		'name'      => 'Users',
		'url'       => site_url('user'),
		'icon'      => 'fa fa-users'
	),*/
	'komoditas' => array(
		'name'      => 'Data Komoditas',
		'url'       => site_url('komoditas'),
		'icon'      => 'fa fa-area-chart'
	),
	

	'logout' => array(
		'name'      => 'Sign out',
		'url'       => site_url('account/logout'),
		'icon'      => 'fa fa-sign-out'
	),
);