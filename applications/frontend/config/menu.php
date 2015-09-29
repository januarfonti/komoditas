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
		'name'      => lang('home'),
		'url'       => site_url(),
		'icon'      => 'fa fa-home'
	),

	'pasar' => array(
		'name'      => 'Data per pasar',
		'url'       => site_url('pasar'),
		'icon'      => 'fa fa-building-o',
		'children'  => array(
			'Pasar 1'		=> site_url('example/demo/1'),
			'Pasar 2'		=> site_url('example/demo/1'),
			'Pasar 3'		=> site_url('example/demo/1'),
			
		)
	),
	
	'tabel_harga_komoditas' => array(
		'name'      => 'Tabel Harga Komoditas',
		'url'       => site_url('tabel_harga_komoditas'),
		'icon'      => 'fa fa-line-chart'
	),

	'data_produksi' => array(
		'name'      => 'Data Produksi',
		'url'       => site_url('data_produksi'),
		'icon'      => 'fa fa-pie-chart'
	),

	'tentang' => array(
		'name'      => 'Tentang Sikompa',
		'url'       => site_url('tentang'),
		'icon'      => 'fa fa-info-circle'
	),

	'berita' => array(
		'name'      => lang('berita'),
		'url'       => site_url('berita'),
		'icon'      => 'fa fa-newspaper-o'
	),

	'kontak' => array(
		'name'      => 'Kontak',
		'url'       => site_url('kontak'),
		'icon'      => 'fa fa-envelope'
	),

);

/*
if (ENABLED_MEMBERSHIP)
{
	$config['menu']['signup'] = array(
		'name'      => lang('sign_up'),
		'url'       => site_url('account/signup'),
		'icon'      => 'fa fa-plus-square',
	);

	$config['menu']['login'] = array(
		'name'      => lang('login'),
		'url'       => site_url('account/login'),
		'icon'      => 'fa fa-sign-in',
	);
}
*/