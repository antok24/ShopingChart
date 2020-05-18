<?php

use Illuminate\Support\Facades\Route;


Route::livewire('/', 'home')->name('home');
Route::livewire('/products', 'product-index')->name('product.index');
Route::livewire('/carts', 'cart-index')->name('cart.index');
Route::livewire('/students', 'student-index')->name('student.index');
Route::livewire('/translators','translator-index')->name('translator.index');
Route::livewire('/buku', 'buku.buku-index')->name('buku.index');
Route::livewire('/pegawai', 'pegawai.pegawai-index')->name('pegawai.index');
Route::livewire('/barang', 'barang.barang-index')->name('barang.index');
