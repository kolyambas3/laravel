<?php

use App\Jobs\Deploy;
use App\Jobs\ProcessPayment;
use App\Jobs\PullRepo;
use App\Jobs\RunTests;
use App\Jobs\SendWelcomeEmail;
use App\Jobs\TestJob;
use App\User;
use Illuminate\Support\Facades\Bus;
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

Route::get('/', function () {
    TestJob::dispatch();

    return view('welcome');
});
