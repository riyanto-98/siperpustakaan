@extends('main')

@section('title','Form Dept')

@section('content')
<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-6"><h1>Buku</h1></div>
                    
                </div>
            </div>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Form Buku</h3>
                </div>
                <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Photo Buku</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                             </div>
                                
                        
                        
                
                            <div class="form-group">
                                <label for="namabuku">Nama Buku</label>
                                <input type="text" class="form-control" id="namabuku">
                            </div>
                            <div class="form-group">
                                <label for="namapengarang">Nama Pengarang</label>
                                <input type="text" class="form-control" id="namapengarang" >
                            </div>
                            <div class="form-group">
                                    <label for="kategori">Penerbit</label>
                                    <select class="form-control" id="kategori">
                                      <option>Erlangga</option>
                                      <option>Filsafat & Psiologi</option>
                                      <option>Agama</option>
                                      <option>Sosial</option>
                                      <option>Bahasa</option>
                                      <option>Sains & Matematika</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="kategori">Genre</label>
                                    <select class="form-control" id="kategori">
                                      <option>Umum</option>
                                      <option>Filsafat & Psiologi</option>
                                      <option>Agama</option>
                                      <option>Sosial</option>
                                      <option>Bahasa</option>
                                      <option>Sains & Matematika</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Jumlah</label>
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