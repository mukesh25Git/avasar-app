@extends('layouts.app')
@section('title') List Expense @endsection
@section('content')
    <div class="content-wrapper">
   <div class="card m-2">
    <div class="card-header bg-secondary">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-10">Expense list</div>
                    <div class="col-lg-2"><a href="{{route('addExpense')}}" class="btn btn-outline-warning float-right">Add Expense</a></div>
                </div>
            </div>
        </div>
    </div>
        <div class="card-body">
            @if (session('success')) <div class="text-success">  {{ session('success') }}</div> @endif
            @if (session('error')) <div class="text-danger">  {{ session('error') }}</div> @endif


           <table class="table">
            <thead>
              
                <tr>
                    <th>sr.</th>
                    <th>Expense Amount</th>
                    <th>Expense Description</th>
                    <th class="text-danger" colspan="2">Action</th>
                </tr>

            </thead>
            <tbody>
                @if(!empty($data))
                @foreach($data as $datas) 
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$datas->amount}}</td>
                    <td>{!!$datas->description!!}</td>
                    <td><a href="{{route('editExpense',['id'=>$datas->id])}}" title="Edit"><i class="fa-solid fa-pencil"></i></a></td>
                    <td><a href="{{route('deleteExpense',['id'=>$datas->id])}}" title="Delete"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                @endforeach
                @endif
            </tbody>
           </table>
        </div>
       
    </div>
   </div>
</div>

    
@endsection