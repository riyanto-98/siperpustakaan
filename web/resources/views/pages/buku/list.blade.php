@extends('main')

@section('title','List Buku')

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
                    <a href="{{ route("buku.create") }}" class="btn btn-success">
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
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration + (10*($data->currentPage()-1)) }}</td>
                            <td>{{ $item->namabuku }}</td>
                            <td>{{ $item->namapengarang }}</td>
                            <td>{{ $item->penerbit }}</td>
                            <td>{{ $item->genre }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td><a href="{{ route("buku.show",[$item->id]) }}" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> Rubah</a></td>
                            <td>
                                <form action="{{ route("buku.destroy",[$item->id]) }}"
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
                    @endforeach
                    </tbody>
                </table>
                <div class="float-right mt-2">
                    {{ $data->links() }}
                </div>
            </div>
        </div>

    </section>
</div>
@endsection
