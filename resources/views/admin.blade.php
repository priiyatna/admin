@extends('layouts.main')

@section('title', 'Admin')

@section('content')
   

<div class="row">

<!-- Card jumlah Produk -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-primary text-white shadow">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-white-800">50</div>
                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                        Jumlah Produk</div>
                   
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Card PO -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-success text-white shadow">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-white-800">10</div>
                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                        PO (Purchase Order)</div>
                    
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


 <!-- Card customer -->
 <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-warning text-white shadow">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-white-800">7</div>
                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                        Customer</div>
                    
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Card Admin -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-danger text-white shadow">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-white-800">1</div>
                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                        Admin</div>
                   
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 ml-5">
<table class="table table-bordered">
    <thead>
        <tr>
         <th>NO</th>
         <th>Username</th>
         <th>Fullname</th>
         <th>No HP</th>                     
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>DEELLL</td>
            <td>DELIA IRYANTI</td>
            <td>08765782532</td>
           
        </tr>
        <tr>
            <td>2</td>
            <td>WAHHHYYYY</td>
            <td>WAHYUDIN</td>
            <td>08765782532</td>
           
        </tr>
        <tr>
            <td>3</td>
            <td>PRRRYYY</td>
            <td>PRIYATNA</td>
            <td>08765782532</td>
           
        </tr>
    </Tbody>
</table>
    <!-- /.container-fluid -->



</div>
</div>
@endsection
