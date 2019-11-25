@extends('main')

@section('title','List Staff')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Buku</h1></div>
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
                <h3 class="card-title">List Buku</h3>
            </div>
            <div class="card-body">
                    <table style="height: 100px;">
                            <tbody>
                              <tr>
                                <td >ID Member: 123911</td>                              
                              </tr>
                              <tr>
                                <td >Nama : Agus</td>
                              </tr>
                            </tbody>
                    </table>
            </div>
            <div class="card-body">
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.Pinjam</th>
                                <th>Nama Buku</th> 
                                <th>Tgl Pinjam</th>
                                <th>Tgl Kembali</th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <td>9090</td>
                                <td>Matematika</td>
                                <td>12-1-19</td>
                                <td>19-1-19</td>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                    <td>9091</td>
                                    <td>Fisika</td>
                                    <td>12-1-19</td>
                                    <td>19-1-19</td>
                            </tr>
                        </thead>
                    </table>
                    <div class="row mt-2 , row ml-1">
                        <a href="request">
                           <button type="button" class="btn btn-success">Siap</button> 
                        </a>
                    <div class="row ml-1">
                        <a href="request">
                          <button type="button" class="btn btn-danger">Back</button>
                        </a>
                    </div>
                        
                    </div>
                    </div>
                    
                </div>
                    
    </section>
</div>
@endsection
