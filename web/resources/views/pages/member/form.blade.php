@extends('main')

@section('title','Form Member')

@section('content')
<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6"><h1>Member</h1></div>
                    <div class="col-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("member.index") }}">List Member</a></li>
                        </ol>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Form Member</h3>
                </div>
                <div class="card-body">
                        <form action={{ isset($data)
                            ?route("member.update",[$data->id])
                            :route("member.store") }}
                            method="POST" autocomplete="off">
                            @csrf
                            @if (isset($data))
                            @method("PUT")
                            @endif 

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" id="nim" >
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" >
                            </div>
                            <div class="form-group">
                                <label for="no">No.Hp</label>
                                <input type="text" class="form-control" name="no" >
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email"
                                    class="form-control @error("email") is-invalid @enderror"
                                    name="email" value='{{ isset($data)?$data->email:old("email") }}'>
                                @error("email")
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group float-right">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                    <a href="{{ route("member.index") }}" class="btn btn-danger">
                                        <i class="fa fa-arrow-left"></i> Batal
                                    </a>
                                </div>
                        </form>    

                </div>
            </div>
        </div>
    </div>
    @endsection