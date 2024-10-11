<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
 'menu' => [[
		'icon' => 'fa fa-sitemap',
		'title' => 'Dashboard',
		'url' => 'javascript:;',
			'url' => '/dashboard',
			'title' => 'Dashboard',
			'route-name' => 'dashboard'
	],[
		'icon' => 'fa fa-utensils',
		'title' => 'POS System',
		'url' => '/pos/customer-order',
	],[
	'icon' => 'fa fa-database',
		'title' => 'MASTER',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/kategori',
			'title' => 'Kategori',
			'route-name' => 'index'
		],[
			'url' => '/produk',
			'title' => 'Produk',
			'route-name' => 'index'
		],[
			'url' => '/supplier',
			'title' => 'Supplier',
			'route-name' => 'index'
				
		]]
	],[
	'icon' => 'fa fa-money-bill',
		'title' => 'TRANSAKSI',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/menu',
			'title' => 'Pengeluaran',
			'route-name' => '/menu'
		],[
			'url' => '/',
			'title' => 'Pembelian',
			'route-name' => ''
		],[
			'url' => '/',
			'title' => 'Penjualan',
			'route-name' => ''
		],[
			'url' => '/',
			'title' => 'Transaksi lama',
			'route-name' => ''
		],[
			'url' => '/',
			'title' => 'Transaksi baru',
			'route-name' => ''
						
		]]
	
	],[
		'icon' => 'fa fa-file',
		'title' => 'REPORT',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
				'url' => '/laporan/transaksi',
				'title' => 'Transaksi',
				'route-name' => 'laporan-transaksi'
			],[
				'url' => '/laporan/pengeluaran',	
				'title' => 'Pengeluaran',
				'route-name' => 'laporan-pengeluaran'
			],[
				'url' => '/laporan/pemasukan',
				'title' => 'Pemasukan',
				'route-name' => 'laporan-pemasukan'
			],[
				'url' => '/laporan/penjualan',
				'title' => 'Penjualan',
				'route-name' => 'laporan-penjualan'
			]]		
	],[
		'icon' => 'fa fa-users',
			'title' => 'User',
			'url' => 'javascript:;',
			'route-name' => '/pengaturan'
	],[
		'icon' => 'fa fa-cog',
			'title' => 'Pengaturan',
			'url' => 'javascript:;',
			'route-name' => '/pengaturan'
	
	],[
		'icon' => 'fa fa-key',
		'title' => 'LRL',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/login',
			'title' => 'Login',
			'route-name' => 'login'
		],[
			'url' => '/register',
			'title' => 'Register',
			'route-name' => 'register'
		],[
			'url' => '/login',
			'title' => 'Logout',
			'route-name' => 'login'
		]]

	]]
];
