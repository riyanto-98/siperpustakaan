@extends('main')

@section('title','Form Dept')

@section('content')
<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6"><h1>Penerbit</h1></div>
                    <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("penerbit.index") }}">List Penerbit</a></li>
                        <li class="breadcrumb-item active">Form Penerbit</li>
                    </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Form Penerbit</h3>
                </div>
                <div class="card-body">
                        <form action={{ isset($data)
                            ?route("penerbit.update",[$data->id])
                            :route("penerbit.store") }}
            method="POST" autocomplete="off">
            @csrf
            @if (isset($data))
                @method("PUT")
            @endif                                     
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
<<<<<<< HEAD
                                <input type="text" class="form-control" name="penerbit" value='{{ isset($data)?$data->penerbit:old("penerbit") }}'>
=======
                                <input type="text" class="form-control" name="penerbit">
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
                            </div>
                            <div class="form-group float-right">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                    <a href="{{ route("penerbit.index") }}" class="btn btn-danger">
                                        <i class="fa fa-arrow-left"></i> Batal
                                    </a>
                                </div>
                        </form>    

                </div>
            </div>
        </div>
    </div>
    @endsection