<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MainController;


Route::get('/', function () {
	return redirect('/dashboard');
});

Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
Route::get('/kategori/data', [KategoriController::class, 'data']);
Route::resource('/kategori' , KategoriController::class);

// Route::get('kategori/index', 'MainController@kategori')->name('kategori');

// Route::get('/laporan/penjualan', 'MainController@laporanPenjualan')->name('laporan-penjualan');
// Route::get('/laporan/transaksi', 'MainController@laporanTransaksi')->name('laporan-transaksi');
// Route::get('/laporan/pemasukan', 'MainController@laporanPemasukan')->name('laporan-pemasukan');
// Route::get('/laporan/pengeluaran', 'MainController@laporanPengeluaran')->name('laporan-pengeluaran');

// Route::get('/pos/customer-order', 'MainController@posCustomerOrder')->name('pos-customer-order');
// Route::get('/pos/kitchen-order', 'MainController@posKitchenOrder')->name('pos-kitchen-order');
// Route::get('/pos/counter-checkout', 'MainController@posCounterCheckout')->name('pos-counter-checkout');
// Route::get('/pos/table-booking', 'MainController@posTableBooking')->name('pos-table-booking');
// Route::get('/pos/menu-stock', 'MainController@posMenuStock')->name('pos-menu-stock');


// Route::get('/extra/invoice', 'MainController@extraInvoice')->name('extra-invoice');
// Route::get('/extra/profile', 'MainController@extraProfile')->name('extra-profile');

// Route::get('/login/v1', 'MainController@loginV1')->name('login-v1');
// Route::get('/login', 'MainController@loginV2')->name('login');
// Route::get('/login/v3', 'MainController@loginV3')->name('login-v3');
// Route::get('/register', 'MainController@registerV3')->name('register');


// Route::get('/pengaturan', 'MainController@pengaturan')->name('pengaturan');

// Route::get('/profil', 'MainController@profil')->name('profil');
// Route::get('/edit/profil', 'MainController@editProfil')->name('edit-profil');

// Route::get('/menu/tambah', 'MainController@menuTambah')->name('menu-tambah');
// Route::get('/menu/daftar', 'MainController@menuDaftar')->name('menu-daftar');
// Route::get('/menu/kategori', 'MainController@menuKategori')->name('menu-kategori');
// Route::get('/menu/kategori/tambah', 'MainController@menuKategoriTambah')->name('menu-kategori-tambah');

// Route::get('/menu', 'MainController@showMenu')->name('menu.index');
