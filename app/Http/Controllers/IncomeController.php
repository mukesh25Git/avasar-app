<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use auth;
use App\Models\Income;

class IncomeController extends Controller
{

    public function addIncome(){
        return view('income.add');
    
        }

   public function incomeList(Request $request){
    $data = Income::all();
    return view('income.list', compact('data'));

    }

    public function store(Request $request){
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'source' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

       $amount = $request->amount;
       $source = $request->source;
       $date = $request->date;
      $obj = new Income;
      $obj->amount= $request->amount;
      $obj->source= $request->source;
      $obj->date= $request->date;
      $obj->save();
     return redirect()->route('incomeList')->with('success', 'Added successfully');
    
        }

        public function deleteIncome(Request $request){
            if(!empty($request->id)){
                $id = $request->id;
                $data = Income::where('id', $id)->first();
                if(!empty($data)){
                    $data->delete();
                    return redirect()->route('incomeList')->with('success', 'Deleted successfully');
                }else{
                    return redirect()->route('incomeList')->with('error', 'Record Not found');
                }
            }else{
                return redirect()->route('incomeList')->with('error', 'Invalid Id');
            }
            return redirect()->route('incomeList')->with('success', 'Added successfully');
        }

        public function editIncome(Request $request){
                if(!empty($request->id)){
                    $id = $request->id;
                    $data = Income::where('id', $id)->first();
                    if(!empty($data)){
                        return view('income.edit',compact('data'));
                    }else{
                        return redirect()->route('incomeList')->with('error', 'Record Not found');
                    }
                }else{
                    return redirect()->route('incomeList')->with('error', 'Invalid Id');
                }
               
              return redirect()->route('incomeList')->with('success', 'Added successfully');
             
        }

        public function updateIncome(Request $request){
            $request->validate([
                'amount' => 'required|numeric|min:0',
                'source' => 'required|string|max:255',
                'date' => 'required|date',
            ]);
            
            $amount = $request->amount;
            $source = $request->source;
            $date = $request->date;

            if(!empty($request->id)){
                $id = $request->id;
                $data = Income::where('id', $id)->first();


               $data->amount= $amount;
               $data->source= $source;
               $data->date= $date;
               $data->save();
               return redirect()->route('incomeList')->with('success', 'Recore Updated successfully');
            }else{
                return redirect()->route('incomeList')->with('error', 'Invalid Id');
            } 
    }

}
