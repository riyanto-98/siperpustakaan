@extends('main')

@section('title','Form Genre')

@section('content')
<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6"><h1>Genre</h1></div>
                    <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route("genre.index") }}">List Genre</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Form Genre</h3>
                </div>
                <div class="card-body">
                        <form action={{ isset($data)
                            ?route("genre.update",[$data->id])
                            :route("genre.store") }}   
                            
                method="POST" autocomplete="off">
            @csrf
            @if (isset($data))
                @method("PUT")
            @endif 

                            <div class="form-group">
                                <label for="genre">Genre</label>
<<<<<<< HEAD
                                <input type="text" class="form-control" name="genre" value='{{ isset($data)?$data->genre:old("genre") }}'>
=======
                                <input type="text" class="form-control" name="genre">
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
                            </div>
                            <div class="form-group float-right">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                    <a href="{{ route("genre.index") }}" class="btn btn-danger">
                                        <i class="fa fa-arrow-left"></i> Batal
                                    </a>
                                </div>
                        </form>    

                </div>
            </div>
        </div>
    </div>
    @endsection