@extends('layouts.app')
@section('title') Income @endsection
@section('content')
    <div class="content-wrapper">
   <div class="card m-2">
    <div class="card-header bg-primary">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-10">Edit</div>
                    <div class="col-lg-2"><a href="{{route('incomeList')}}" class="btn btn-outline-warning float-right">Back</a></div>
                </div>
            </div>
        </div>
    </div>
        <div class="card-body">
            <form action="{{route('updateIncome',['id'=>$data->id])}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="amount" class="form-label">Income Amount <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="amount" id="amount"  value="{{$data->amount}}" placeholder="Enter income amount" step="0.01" min="0" value="{{ old('amount') }}">
                    @if ($errors->has('amount'))
                      <span class="text-danger">{{ $errors->first('amount') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="source" class="form-label">Income Source <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="source" name="source" value="{{$data->source}}" placeholder="Enter income source" value="{{ old('source') }}">
                    @if ($errors->has('source'))
                      <span class="text-danger">{{ $errors->first('source') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="date" value="{{$data->date}}" name="date" value="{{ old('date') }}">
                    @if ($errors->has('date'))
                      <span class="text-danger">{{ $errors->first('date') }}</span>
                    @endif
                </div>
                <center><button type="submit" class="btn btn-primary">Update</button></center>
            </form>
        </div>

    
       
    </div>
   </div>
</div>

    
@endsection