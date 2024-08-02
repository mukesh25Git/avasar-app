
@extends('layouts.app')
@section('css')
@endsection
@section('title') Summary Dashboard @endsection

@section('content')
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Summary Dashboard</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                  <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>{{ $income_amounts }}</h3>
        
                        <p>Total Income</p>
                      </div>
                      <div class="icon">
                        <i class="fa-solid fa-coins"></i> 
                      </div>
                      {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>{{ $expenses_amount }}</h3>
        
                        <p>Total Expense</p>
                      </div>
                      <div class="icon">
                        <i class="fa-solid fa-credit-card custom-icon"></i>
                        
                      </div>
                      {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>{{ $total_remaining }}</h3>
        
                        <p>Remaining Balance</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          </div>
@endsection
