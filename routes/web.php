<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Owner\WorkspacesController;
use App\Http\Controllers\Owner\SettingOwnerController;
use App\Http\Controllers\Owner\CalendarController;
use App\Http\Controllers\Owner\WorkspaceRentingController;
use App\Http\Controllers\Owner\TainentController;
use App\Http\Controllers\Customer\CustomerWorkspaceController;
use App\Http\Controllers\Customer\SettingController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCompanyController;
use App\Http\Controllers\Admin\AdminCustomersController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Admin\AdminWorkspacesController;
use App\Http\Controllers\Customer\CustomerTainantsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Payment\PaypalController;
use App\Http\Livewire\Calendar;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// Owner Routes [ Namespace => app\Http\Controllers\Owner ]
Route::namespace('/Owner')
    ->middleware(['auth:owner'])
    ->group(function() {

        // Start Owner Controller [Homepage]
        Route::get('/owner', [OwnerController::class, 'index'])->name('owner.home');
        // End Owner Controller [Homepage]

        // Start Workspace Routes
        Route::group([
            'prefix' => '/workspace',
            'as' => 'workspace.',
        ], function() {
            Route::get('/', [WorkspacesController::class, 'index'])->name('index');
            Route::get('/create', [WorkspacesController::class, 'create'])->name('create');
            Route::get('/{id}/edit', [WorkspacesController::class, 'edit'])->name('edit');
            Route::put('/{id}', [WorkspacesController::class, 'update'])->name('update');
            Route::delete('/{id}', [WorkspacesController::class, 'destroy'])->name('destroy');
            // Route::get('/calender', [CalenderController::class, 'index'])->name('calender');
            Route::post('/', [WorkspacesController::class, 'store'])->name('store');
            Route::get('/renting', [WorkspaceRentingController::class, 'index'])->name('rent');
        });
         // End Workspace Routes

        //  Livewire::component('calendar', Calendar::class);
           // Start Calender
        Route::group([
            'prefix' => '/calendar',
            'as' => 'calendar.',
        ], function() {
            Route::get('/', [CalenderController::class, 'index'])->name('index');
        });
        // End Calender

         // Start Setting Routes

        Route::group([
            'prefix' => '/owner',
            'as' => 'owner.',
        ], function() {
            Route::get('/{id}/setting', [SettingOwnerController::class, 'edit'])->name('setting');
            Route::put('/{id}', [SettingOwnerController::class, 'update'])->name('update');

        });
     // End Setting Routes

     // Start Calender
     Route::group([
        'prefix' => '/calendar',
        'as' => 'calendar.',
    ], function() {
        Route::get('/', [CalendarController::class, 'index'])->name('index');
    });
    // End Calender


    });


        Route::group([
            'prefix' => 'owner',
            'as' => 'owner.',
        ], function() {
            // Another Routes
        });



// Customer Routes [ Namespace => app\Http\Controllers\Customer ]
Route::namespace('/Customer')

->middleware(['auth:web'
// ,'type'
])
->group(function() {

    // Start Customer Controller [Homepage]
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer.home');
    // End Customer Controller [Homepage]


     // Start Customer Workspace
     Route::group([
        'prefix' => 'my-workspaces',
        'as' => 'my-workspaces.',
    ], function() {
        Route::get('/', [CustomerWorkspaceController::class, 'index'])->name('index');
        Route::get('/{id}', [CustomerWorkspaceController::class, 'show'])->name('show');
        Route::post('/getDays', [CustomerWorkspaceController::class, 'getDays'])->name('getDays');

         // Home Page Workspace Show
         Route::get('/specific_workspace/{id}', [CustomerWorkspaceController::class, 'specificWorkspace'])->withoutMiddleware(['auth:web'])->name('specificWorkspace');
    });
    // End Customer Workspace

     // Start Customer Tainant
     Route::group([
        'prefix' => 'my-tainants',
        'as' => 'my-tainants.',
    ], function() {
        Route::get('/', [CustomerTainantsController::class, 'index'])->name('index');


    });
    // End Customer Tainant

    Route::group([
        'prefix' => 'customer',
        'as' => 'customer.',
    ], function() {
       // Start Customer Controller [My Workspace]
        //  Route::get('/customer2', [CustomerWorkspaceController::class, 'index'])->name('show');
        // End Customer Controller [My Workspace]
        // Route::get('/{id}', [CustomerWorkspaceController::class, 'show'])->name('showWorkspace');

       // Start Customer Controller [Setting]
         Route::get('/{id}/setting', [SettingController::class, 'edit'])->name('setting');
         Route::put('/{id}', [SettingController::class, 'update'])->name('update');

        // End Customer Controller [Setting] '
    });

});

// Start Tainents Route
Route::group([
    'prefix' => '/tainent',
    'as' => 'tainent.',
], function() {
    Route::get('/', [TainentController::class, 'index'])->name('index');
    Route::get('/create', [TainentController::class, 'create'])->name('create');
    Route::post('/', [TainentController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [TainentController::class, 'edit'])->name('edit');
    Route::put('/{id}', [TainentController::class, 'update'])->name('update');
    Route::delete('/{id}', [TainentController::class, 'destroy'])->name('delete');
});
// End Tainents Route
// Paypal
Route::get('/payment/{tainent}/create', [PaypalController::class, 'CreatePayment'])->name('CreatePayment');
Route::get('/payment/callback', [PaypalController::class, 'callback'])->name('CallbackPayment');
Route::get('/payment/cancel', [PaypalController::class, 'cancel'])->name('CancelPayment');


// Admin Routes [ Namespace => app\Http\Controllers\Admin ]
Route::middleware('guest','auth:admin')->group(function () {

    Route::get('admin/loginAdmin', [AdminController::class, 'create'])
                ->name('loginAdmin');

    Route::post('admin/loginAdmin', [AdminController::class, 'store']);

});

Route::namespace('/Admin')
->prefix('/admin')
// ->middleware([ 'type'
// ])
->group(function() {

    // Start Admin Controller [Homepage]
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    // End Admin Controller [Homepage]


    Route::group([
        'prefix' => '/company',
        'as' => 'company.',
    ], function() {

        // Start company Admin Controller
         Route::get('/', [AdminCompanyController::class, 'index'])->name('index');
         Route::get('/create', [AdminCompanyController::class, 'create'])->name('create');
         Route::post('/', [AdminCompanyController::class, 'store'])->name('store');
         Route::get('/{id}/edit', [AdminCompanyController::class, 'edit'])->name('edit');
         Route::put('/{id}', [AdminCompanyController::class, 'update'])->name('update');
         Route::delete('/{id}', [AdminCompanyController::class, 'destroy'])->name('delete');

        // End company Admin Controller

                // require __DIR__.'/auth.php';

       // Start Admin Controller []
        //  Route::get('/admin2', [AdminController::class, 'index'])->name('show');
        // End Admin Controller ]

    });
    Route::group([
        'prefix' => '/customer',
        'as' => 'customer.',
    ], function() {

        // Start customer Admin Controller
         Route::get('/', [AdminCustomersController::class, 'index'])->name('index');
         Route::get('/create', [AdminCustomersController::class, 'create'])->name('create');
         Route::post('/', [AdminCustomersController::class, 'store'])->name('store');
         Route::delete('/{id}', [AdminCustomersController::class, 'destroy'])->name('delete');
         Route::get('/{id}/edit', [AdminCustomersController::class, 'edit'])->name('edit');
         Route::put('/{id}', [AdminCustomersController::class, 'update'])->name('update');

        // End customer Admin Controller


    });
    Route::group([
        'prefix' => '/workspace',
        'as' => 'admin.workspace.',
    ], function() {

        // Start workspace Admin Controller
         Route::get('/', [AdminWorkspacesController::class, 'index'])->name('index');
         Route::get('/{id}', [AdminWorkspacesController::class, 'show'])->name('show');
         Route::delete('/{id}', [AdminWorkspacesController::class, 'destroy'])->name('delete');
         Route::get('/{id}/edit', [AdminWorkspacesController::class, 'edit'])->name('edit');
         Route::put('/{id}', [AdminWorkspacesController::class, 'update'])->name('update');

        // End workspace Admin Controller


    });

    // Start Setting Routes [Admin]
    Route::group([
        'prefix' => '/settings',
        'as' => 'admin.setting.'
    ], function() {
        Route::get('/', [AdminSettingsController::class, 'index'])->name('index');
        Route::post('/', [AdminSettingsController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [AdminSettingsController::class, 'edit'])->name('edit');
        Route::put('/{id}', [AdminSettingsController::class, 'update'])->name('update');
    });
    // End Setting Routes [Admin]

});




