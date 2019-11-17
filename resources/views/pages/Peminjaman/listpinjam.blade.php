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
                                <td >ID : agus</td>                              
                              </tr>
                              <tr>
                                <td >Nama : agus</td>
                              </tr>
                              <tr>
                                  <td>Tgl Pinjam : 12-12-19</td>
                              </tr>
                            </tbody>
                    </table>
            </div>
            <div class="card-body">
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID Buku</th>
                                <th>Nama Buku</th> 
                                <th>Genre</th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <td>1</td>
                                <td>9090</td>
                                <td>Matematika</td>
                                <td>Sains & MateMatika</td>
                            </tr>
                        </thead>
                        <thead>
                                <tr>
                                    <td>2</td>
                                    <td>9094</td>
                                    <td>Ipa</td>
                                    <td>Sains & MateMatika</td>
                                </tr>
                            </thead>
                            <thead>
                                    <tr>
                                        <td>3</td>
                                        <td>9040</td>
                                        <td>fisika</td>
                                        <td>Sains & MateMatika</td>
                                    </tr>
                                </thead>
                    </table>
                    <div class="row mt-2">
                        <button type="button" class="btn btn-info">Selesai</button>
                        <div class="row ml-2">
                            <button type="button" class="btn btn-danger">Cancel</button>
                    </div>
                    </div>
                    
                </div>
                    
    </section>
</div>
@endsection
