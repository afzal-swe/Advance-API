<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\admin\TicketController;


Route::middleware(['is_admin'])->group(function () {

    Route::group(['prefix' => 'dashboard'], function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/', 'Admin_dashboard')->name('admin_dashboard');
            Route::get('/logout', 'Admin_logout')->name('admin.logout');
        });

        Route::group(['prefix' => 'ticket'], function () {
            Route::controller(TicketController::class)->group(function () {
                Route::get('/', 'all_ticket')->name('ticket.index');
            });
        });
    });
});

require __DIR__ . '/auth.php';
