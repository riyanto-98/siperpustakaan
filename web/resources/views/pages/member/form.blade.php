@extends('main')

@section('title','Form Dept')

@section('content')
<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6"><h1>Member</h1></div>
                    
                </div>
            </div>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Form Member</h3>
                </div>
                <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="namabuku">Nama</label>
                                <input type="text" class="form-control" id="namabuku">
                            </div>
                            <div class="form-group">
                                <label for="namapengarang">NIM</label>
                                <input type="text" class="form-control" id="namapengarang" >
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Alamat</label>
                                <input type="text" class="form-control" id="penerbit" >
                            </div>
                            <div class="form-group">
                                <label for="penerbit">No.Hp</label>
                                <input type="text" class="form-control" id="penerbit" >
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Email</label>
                                <input type="text" class="form-control" id="penerbit" >
                            </div>
                            <div class="form-group float-right">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                    <a href="listbuku" class="btn btn-danger">
                                        <i class="fa fa-arrow-left"></i> Batal
                                    </a>
                                </div>
                        </form>    

                </div>
            </div>
        </div>
    </div>
    @endsection