@extends('main')

@section('title','Form Dept')

@section('content')
<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6"><h1>Buku </h1></div>
                    <div class="col-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("buku.index") }}">List Buku</a></li>
                            <li class="breadcrumb-item active">Form Buku</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Form Buku</h3>
                </div>
                <div class="card-body">
                        <form action={{ isset($data)
                            ?route("buku.update",[$data->id])
                            :route("buku.store") }}
            method="POST" autocomplete="off">
            @csrf
            @if (isset($data))
                @method("PUT")
            @endif
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Photo Buku</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                             </div>
                                
                            <div class="form-group">
                                <label for="namabuku">Nama Buku</label>
                                <input type="text" class="form-control" name="namabuku">
                            
                            </div>
                            <div class="form-group">
                                <label for="namapengarang">Nama Pengarang</label>
                                <input type="text" class="form-control" name="namapengarang" >
                            </div>
                            <div class="form-group">
                                    <label for="penerbit">Penerbit</label>
                                    <select class="form-control" name="penerbit">
                                      <option>Erlangga</option>
                                      <option>Filsafat & Psiologi</option>
                                      <option>Agama</option>
                                      <option>Sosial</option>
                                      <option>Bahasa</option>
                                      <option>Sains & Matematika</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="genre">Genre</label>
                                    <select class="form-control" name="genre">
                                      <option>Umum</option>
                                      <option>Filsafat & Psiologi</option>
                                      <option>Agama</option>
                                      <option>Sosial</option>
                                      <option>Bahasa</option>
                                      <option>Sains & Matematika</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" >
                            </div>
                            <div class="form-group float-right">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                    <a href="{{ route("buku.index") }}" class="btn btn-danger">
                                        <i class="fa fa-arrow-left"></i> Batal
                                    </a>
                                </div>
                        </form>    

                </div>
            </div>
        </div>
    </div>
    @endsection