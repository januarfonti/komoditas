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
	

	'data_produksi' => array(
		'name'      => 'Data Produksi',
		'url'       => site_url('data_produksi'),
		'icon'      => 'fa fa-pie-chart'
	),

	'luas_lahan' => array(
		'name'      => 'Data Luas Lahan',
		'url'       => site_url('luas_lahan'),
		'icon'      => 'fa fa-tree'
	),



	'logout' => array(
		'name'      => 'Sign out',
		'url'       => site_url('account/logout'),
		'icon'      => 'fa fa-sign-out'
	),
);