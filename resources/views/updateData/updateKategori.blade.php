@extends('komponen.component')
@section('content')
<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Update Kategori</h1>
    <hr>
    <form action="{{ route('kategori.update' , ['id'=>$kategori->idKategori]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row mt-1">
            <div class="form-group">
                <div class="col-1">
                    <label for="judul" class="form-label">Nama Kategori</label>
                </div>
                <div class="col-sm-12">
                    <input type="text" name="nama" id="nama" class="form-control" placeholder=""
                        value="{{old('nama', $kategori->nama)}}" aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group">
                <div class="col-1">
                    <label for="jenis" class="form-label">Jenis Kategori</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="jenis" id="jenis" class="form-control" placeholder=""
                        value="{{old('jenis',$kategori->jenis)}}" aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group">
                <div class="col-1">
                    <div class="d-grid gap-2">
                        <button type="submit" name="" id="" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection