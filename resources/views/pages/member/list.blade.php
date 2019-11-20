@extends('main')

@section('title','List Member')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Data Member</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Member</li>
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
                <h3 class="card-title">Data Member</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="formmember" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Alamat</th>
                            <th>No.HP</th>
                            <th>Email</th>
                            <th colspan=3>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                                <td>1</td>
                                <td>Udin</td>
                                <td>1614121576</td>
                                <td>Jl.gatsu</td>
                                <td>0822117788</td>
                                <td>udin@gmail.com</td>
                                <td><a href="#" class="btn btn-info btn-block"><i class="fa fa-redo"></i> Reset</a></td>
                                <td><a href="#" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> Rubah</a></td>
                                <td>
                                    <form action="#"
                                        method="POST">
                                        @method("delete")
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-danger btn-block">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        
                    </tbody>
                </table>
                
            </div>
        </div>

    </section>
</div>
@endsection
