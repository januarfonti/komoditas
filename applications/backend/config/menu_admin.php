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
	'bahan_pokok' => array(
		'name'      => 'Data Bahan Pokok',
		'url'       => site_url('bahan_pokok'),
		'icon'      => 'fa fa-cart-plus'
	),
	'jenis_bahanpokok' => array(
		'name'      => 'Data Jenis Bahan Pokok',
		'url'       => site_url('jenis_bahanpokok'),
		'icon'      => 'fa fa-flag-o'
	),
	'pasar' => array(
		'name'      => 'Data Pasar',
		'url'       => site_url('pasar'),
		'icon'      => 'fa fa-simplybuilt'
	),
	'berita' => array(
		'name'      => 'Data Berita',
		'url'       => site_url('berita'),
		'icon'      => 'fa fa-newspaper-o'
	),

	'user' => array(
		'name'      => 'Data User',
		'url'       => site_url('admin'),
		'icon'      => 'fa fa-users'
	),

	'tentang' => array(
		'name'      => 'Halaman Tentang Sikompa',
		'url'       => site_url('tentang'),
		'icon'      => 'fa fa-info-circle'
	),

	'kontak' => array(
		'name'      => 'Halaman Kontak',
		'url'       => site_url('kontak'),
		'icon'      => 'fa fa-envelope'
	),
	/*
	// Example to add sections with subpages
	'example' => array(
		'name'      => 'Examples',
		'url'       => site_url('example'),
		'icon'      => 'fa fa-cog',
		'children'  => array(
			'Demo 1'		=> site_url('example/demo/1'),
			'Demo 2'		=> site_url('example/demo/2'),
			'Demo 3'		=> site_url('example/demo/3'),
		)
	),
	// end of example
	
	'admin' => array(
		'name'      => 'Administration',
		'url'       => site_url('admin'),
		'icon'      => 'fa fa-cog',
		'children'  => array(
			'Backend Users'		=> site_url('admin/backend_user'),
		)
	),
	*/

	'logout' => array(
		'name'      => 'Sign out',
		'url'       => site_url('account/logout'),
		'icon'      => 'fa fa-sign-out'
	),
);