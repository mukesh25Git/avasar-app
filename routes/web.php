<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\SummaryDashboardController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {

Route::get('/add-income', [IncomeController::class, 'addIncome'])->name('addIncome');
Route::get('/income-list', [IncomeController::class, 'incomeList'])->name('incomeList');
Route::post('/store-income', [IncomeController::class, 'store'])->name('storeIncome');
Route::get('/delete-income', [IncomeController::class, 'deleteIncome'])->name('deleteIncome');
Route::get('/edit-income', [IncomeController::class, 'editIncome'])->name('editIncome');
Route::post('/update-income', [IncomeController::class, 'updateIncome'])->name('updateIncome');

Route::get('/add-expense', [ExpenseController::class, 'addExpense'])->name('addExpense');
Route::get('/expense-list', [ExpenseController::class, 'expense'])->name('expenseList');
Route::any('/store-expense', [ExpenseController::class, 'storeExpense'])->name('storeExpense');
 Route::get('/delete-expense', [ExpenseController::class, 'deleteExpense'])->name('deleteExpense');
 Route::get('/edit-expense', [ExpenseController::class, 'editExpense'])->name('editExpense');
 Route::post('/update-expense', [ExpenseController::class, 'updateExpense'])->name('updateExpense');

 Route::get('/summary_dashboard', [SummaryDashboardController::class, 'summaryDashboard'])->name('summaryDashboard');
});






require __DIR__.'/auth.php';
