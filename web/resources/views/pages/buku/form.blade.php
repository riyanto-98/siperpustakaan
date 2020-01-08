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
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" value='{{ isset($data)?$data->exampleFormControlFile1:old("exampleFormControlFile1") }}'>
                             </div>
                                
                            <div class="form-group">
                                <label for="namabuku">Nama Buku</label>
<<<<<<< HEAD
                                <input type="text" class="form-control" name="namabuku" value='{{ isset($data)?$data->namabuku:old("namabuku") }}'>
=======
                                <input type="text" class="form-control" name="namabuku">
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
                            
                            </div>
                            <div class="form-group">
                                <label for="namapengarang">Nama Pengarang</label>
<<<<<<< HEAD
                                <input type="text" class="form-control" name="namapengarang" value='{{ isset($data)?$data->namapengarang:old("namapengarang") }}'>
=======
                                <input type="text" class="form-control" name="namapengarang" >
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
                            </div>
                            
                            <div class="form-group">
<<<<<<< HEAD
                                    <label for="penerbit">Penerbit</label>
                                    <select class="form-control" name="penerbit" value='{{ isset($data)?$data->penerbit:old("penerbit") }}'>
                                      <option>Erlangga</option>
                                      <option>Kemendikbud</option>
                                    </select>
=======
                                <label for="penerbit_id">Penerbit</label>
                                <select name="penerbit_id" id="penerbit_id" class="form-control">
                                    @foreach ($penerbit as $item)
                                        <option value="{{ $item->id }}"
                                            {{ isset($data) && $data->penerbit_id==$item->id?"selected":"" }}
                                            >{{ $item->penerbit }}</option>
                                    @endforeach
                                </select>
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
                            </div>

                            <div class="form-group">
                                    <label for="genre">Genre</label>
<<<<<<< HEAD
                                    <select class="form-control" name="genre" value='{{ isset($data)?$data->genre:old("genre") }}'>
=======
                                    <select class="form-control" name="genre">
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
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
<<<<<<< HEAD
                                <input type="text" class="form-control" name="jumlah" value='{{ isset($data)?$data->jumlah:old("jumlah") }}' >
=======
                                <input type="text" class="form-control" name="jumlah" >
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
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