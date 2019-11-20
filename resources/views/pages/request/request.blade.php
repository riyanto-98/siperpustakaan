@extends('main')

@section('title','List Staff')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Request</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">List Buku</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        @if ($message = session("info"))
            <div class="alert alert-success"> 
                <i class="fa fa-info-circle"></i> {{ $message }} 
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Permintan</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th> 
                            <th>Status</th> 
                            <th >Action</th>                          
                        </tr>
                    </thead>
                    <thead>
                        <tr >
                            <td>123911</td>
                            <td><a href="listrequest" >Agus</td>
                            <td>Belum Diambil</td>
                            <td>
                                <button type="button" class="btn btn-success">Di Ambil</button>
                                <button type="button" class="btn btn-danger">Batal</button>
                            </td>
                        </tr>
                        <tr >
                            <td>123912</td>
                            <td><a href="#" >bambang</td>
                            <td>Sudah Diambil</td>
                            <td>
                                <button type="button" class="btn btn-success">Di Ambil</button>
                                <button type="button" class="btn btn-danger">Batal</button>
                            </td>
                            
                        </tr>
                    </thead>
                </table>
               
            </div>
        </div>

    </section>
</div>
@endsection
