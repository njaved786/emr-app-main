<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/**************************
 * Authentication Routes
 **************************/
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

Route::get('/logout', function () {
    return view('logout');
});


/***************
 * App Routes
 ***************/
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/ar-aging-report', function () {
    return view('ar-aging-report');
})->name('ar-aging-report');

Route::get('/audit-report', function () {
    return view('audit-report');
})->name('audit-report');

Route::get('/authorizations', function () {
    return view('authorizations');
})->name('authorizations');

Route::get('/billing-report', function () {
    return view('billing-report');
})->name('billing-report');

Route::get('/billing', function () {
    return view('billing');
})->name('billing');

Route::get('/cmns', function () {
    return view('cmns');
})->name('cmns');

Route::get('/denials', function () {
    return view('denials');
})->name('denials');

Route::get('/deposits', function () {
    return view('deposits');
})->name('deposits');

Route::get('/eob-era', function () {
    return view('eob-era');
})->name('eob-era');

Route::get('/inventory-report', function () {
    return view('inventory-report');
})->name('inventory-report');

Route::get('/inventory', function () {
    return view('inventory');
})->name('inventory');

Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices');

Route::get('/items', function () {
    return view('items');
})->name('items');

Route::get('/orders-report', function () {
    return view('orders-report');
})->name('orders-report');

Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/organization', function () {
    return view('organization');
})->name('organization');

Route::get('/patient-report', function () {
    return view('patient-report');
})->name('patient-report');

Route::get('/patients', function () {
    return view('patients');
})->name('patients');

Route::get('/payment-report', function () {
    return view('payment-report');
})->name('payment-report');

Route::get('/payments', function () {
    return view('payments');
})->name('payments');

Route::get('/prescriptions', function () {
    return view('prescriptions');
})->name('prescriptions');

Route::get('/purchase-order', function () {
    return view('purchase-order');
})->name('purchase-order');

Route::get('/referring-provider-report', function () {
    return view('referring-provider-report');
})->name('referring-provider-report');

Route::get('/refunds', function () {
    return view('refunds');
})->name('refunds');

Route::get('/revenue-report', function () {
    return view('revenue-report');
})->name('revenue-report');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/bitrix-integration', function () {
    return view('bitrix_integration');
})->name('bitrix-integration');

Route::get('/niko-integration', function () {
    return view('niko_integration');
})->name('niko-integration');

Route::get('/patient-details', function () {
    return view('patient-details');
})->name('patient-details');
