<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expense;

class SummaryDashboardController extends Controller
{

    public function summaryDashboard(Request $request){
        
        $income_amounts = Income::sum('amount');
        $expenses_amount = Expense::sum('amount');
        $total_remaining = ($income_amounts - $expenses_amount);

        return view('summary_dashboard',compact('income_amounts','expenses_amount','total_remaining'));

    }

}
