<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function addExpense(){
        return view('expense.add');
        }

    public function expense(Request $request){
        $data= Expense::all();
        return view('expense.list', compact('data'));
    }

    public function storeExpense(Request $request){
        $request->validate([
            'description' => 'required|string|max:65535',
            'amount' => 'required|numeric|min:0',
        ]);

        $amount = $request->amount;
        $description = $request->description;
       $obj = new Expense;
       $obj->amount= $request->amount;
       $obj->description= $request->description;
       $obj->save();
       return redirect()->route('expenseList')->with('success', 'Added successfully');
     
    }

    public function editExpense(Request $request){
        if(!empty($request->id)){
            $id = $request->id;
            $data = Expense::where('id', $id)->first();
            if(!empty($data)){
                return view('expense.edit',compact('data'));
            }else{
                return redirect()->route('expenseList')->with('error', 'Record Not found');
            }
        }else{
            return redirect()->route('expenseList')->with('error', 'Invalid Id');
        }
       
      return redirect()->route('expenseList')->with('success', 'Added successfully');
    }


    public function updateExpense(Request $request){
        $request->validate([
            'description' => 'required|string|max:65535',
            'amount' => 'required|numeric|min:0',
        ]);

        $amount = $request->amount;
        $description = $request->description;

        if(!empty($request->id)){
            $id = $request->id;
            $data = Expense::where('id', $id)->first();


           $data->amount= $amount;
           $data->description= $description;
           $data->save();
           return redirect()->route('expenseList')->with('success', 'Expense Updated successfully');
        }else{
            return redirect()->route('expenseList')->with('error', 'Invalid Id');
        } 
    }


    public function deleteExpense(Request $request){
        if(!empty($request->id)){
            $id = $request->id;
            $data = Expense::where('id', $id)->first();
            if(!empty($data)){
                $data->delete();
                return redirect()->route('expenseList')->with('success', 'Deleted successfully');
            }else{
                return redirect()->route('expenseList')->with('error', 'Record Not found');
            }
        }else{
            return redirect()->route('expenseList')->with('error', 'Invalid Id');
        }
    }



}
