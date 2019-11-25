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
                <div class="float-right mb-2">
                    <a href="formbuku" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Buku</th>
                            <th>Nama Pengarang</th>
                            <th>Penerbit</th> 
                            <th>Genre</th>
                            <th>Jumlah</th>
                            <th colspan=3>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Matematika</td>
                            <td>Ryan</td>
                            <td>Erlangga</td> 
                            <td>Sains & MateMatika</td>
                            <td>50</td>
                            <th colspan=3 >
                                <button type="button" class="btn btn-info">Edit</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
               
            </div>
        </div>

    </section>
</div>
@endsection
