<?php

use App\Notifications\Invoice\InvoiceAction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {

    $invoice = \App\Models\Invoice::first();

//    $invoice->user->notify(new InvoiceAction($invoice));

    return view('emails.invoice.in_transit', [
        'invoice' => $invoice,
    ]);
});
