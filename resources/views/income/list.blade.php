@extends('layouts.app')
@section('title') Income @endsection
@section('content')
    <div class="content-wrapper">
   <div class="card m-2">
    <div class="card-header bg-primary">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-10">Income list</div>
                    <div class="col-lg-2"><a href="{{route('addIncome')}}" class="btn btn-outline-warning float-right">Add New Income</a></div>
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
                    <th>Income Amount</th>
                    <th>Income Source</th>
                    <th>Date</th>
                    <th class="text-danger" colspan="2">Action</th>
                </tr>

            </thead>
            <tbody>
                @if(!empty($data))
                @foreach($data as $datas) 
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$datas->amount}}</td>
                    <td>{{$datas->source}}</td>
                    <td>{{$datas->date}}</td>
                    <td><a href="{{route('editIncome',['id'=>$datas->id])}}" title="Edit"><i class="fa-solid fa-pencil"></i></a></td>
                    <td><a href="{{route('deleteIncome',['id'=>$datas->id])}}" title="Delete"><i class="fa-solid fa-trash"></i></a></td>
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