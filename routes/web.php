<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AuthenticationKeyController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\GuardianTypeController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\MediumController;



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
    return view('pages.index');
});

Route::get('/index', [IndexController::class, 'index'])->name('index');



// edited by kiruththigan 5/7/2022

// role
Route::get('/role-showall', [RoleController::class, 'showall'])->name('role.showall');
Route::get('/role-add', [RoleController::class, 'add'])->name('role.add'); // no need beacause used modal
Route::post('/role-add-process', [RoleController::class, 'addProcess'])->name('role.addProcess');
Route::get('/role-edit/{id}', [RoleController::class, 'edit'])->name('role.edit'); // no need beacause used modal
Route::post('/role-update-process', [RoleController::class, 'updateProcess'])->name('role.updateProcess'); // no need beacause used only one modal

// authentication keys
Route::get('/authentication-key-showall', [AuthenticationKeyController::class, 'showall'])->name('authentication-key.showall');
Route::post('/authentication-key-add-process', [AuthenticationKeyController::class, 'addProcess'])->name('authentication-key.addProcess');

// authentication
Route::get('/authentication-showall', [AuthenticationController::class, 'showall'])->name('authentication.showall');
Route::post('/authentication-add-process', [AuthenticationController::class, 'addProcess'])->name('authentication.addProcess');

// classes
Route::get('/class-showall', [ClassesController::class, 'showall'])->name('class.showall');
Route::post('/class-add-process', [ClassesController::class, 'addProcess'])->name('class.addProcess');

// payment methods
Route::get('/payment-method-showall', [PaymentMethodController::class, 'showall'])->name('payment-method.showall');
Route::post('/payment-method-add-process', [PaymentMethodController::class, 'addProcess'])->name('payment-method.addProcess');

// discounts
Route::get('/discount-showall', [DiscountController::class, 'showall'])->name('discount.showall');
Route::post('/discount-add-process', [DiscountController::class, 'addProcess'])->name('discount.addProcess');

// branches
Route::get('/branch-showall', [BranchController::class, 'showall'])->name('branch.showall');
Route::post('/branch-add-process', [BranchController::class, 'addProcess'])->name('branch.addProcess');

// fees
Route::get('/fees-showall', [FeesController::class, 'showall'])->name('fees.showall');
Route::post('/fees-add-process', [FeesController::class, 'addProcess'])->name('fees.addProcess');

// guardian types
Route::get('/guardian-type-showall', [GuardianTypeController::class, 'showall'])->name('guardian-type.showall');
Route::post('/guardian-type-add-process', [GuardianTypeController::class, 'addProcess'])->name('guardian-type.addProcess');

// guardians  ****this is no need because students page included ***
Route::get('/guardian-showall', [GuardianController::class, 'showall'])->name('guardian.showall');
Route::post('/guardian-add-process', [GuardianController::class, 'addProcess'])->name('guardian.addProcess');

// mediums
Route::get('/mediums-showall', [MediumController::class, 'showall'])->name('mediums.showall');
Route::post('/mediums-add-process', [MediumController::class, 'addProcess'])->name('mediums.addProcess');