@extends('layouts.app')
@section('title') Add expense @endsection
@section('content')
    <div class="content-wrapper">
   <div class="card m-2">
    <div class="card-header bg-secondary">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">Add Expense</div>
                    
                </div>
            </div>
        </div>
    </div>
        <div class="card-body">
            <form action="{{route('storeExpense')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="amount" class="form-label">Expense Amount <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter expense amount" step="0.01" min="0" value="{{ old('amount') }}">
                    @if ($errors->has('amount'))
                       <span class="text-danger">{{ $errors->first('amount') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="source" class="form-label">Expense Description <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" required>{{ old('description') }}</textarea>
                  
                </div>
                @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
             @endif
               <center> <button type="submit" class="btn btn-primary">Submit</button></center>
            </form>
        </div>

    </div>
   </div>
</div>

    
@endsection