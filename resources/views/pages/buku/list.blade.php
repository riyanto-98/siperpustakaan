@extends('main')

@section('title','List Staff')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Staff</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">List Staff</li>
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
                <h3 class="card-title">List Staff</h3>
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
                            <th colspan=3>Action</th>
                        </tr>
                    </thead>
                    
                </table>
               
            </div>
        </div>

    </section>
</div>
@endsection
