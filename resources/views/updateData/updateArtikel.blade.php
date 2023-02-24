@extends('komponen.component')
@section('content')
<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Update Artikel</h1>
    <hr>
    <form action="{{ route('artikel.update' , ['id'=>$artikel->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mt-1">
            <div class="form-group">
                <div class="col-1">
                    <label for="judul" class="form-label">Judul</label>
                </div>
                <div class="col-sm-12">
                    <input type="text" name="judul" id="judul" class="form-control" placeholder=""
                        value="{{old('judul', $artikel->judul)}}" aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group">
                <div class="col-1">
                    <label for="gambar" class="form-label">Gambar</label>
                </div>
                <div class="col-sm-3">
                    <input type="file" name="gambar" id="gambar" class="form-control" placeholder=""
                        value="{{old('gambar',$artikel->gambar)}}" aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group">
                <div class="col-1">
                    <label for="konten" class="form-label">Konten</label>
                </div>
                <div class="col-sm">
                    <input type="text" name="konten" id="konten" class="form-control" placeholder=""
                        value="{{old('konten',$artikel->konten)}}" aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group">
                <label for="kategori" class="form-label">Pili Nama Kategori</label>
                <select class="form-select form-select-lg" name="kategori" id="kategori">
                    @foreach ($kategori as $item)
                    <option value="{{ $item->idKategori}}" {{old('idKategori')==$artikel->idKategori ? 'selected' : null
                        }}>{{$item->nama}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group">
                <div class="col-1">
                    <label for="author" class="form-label">Author</label>
                </div>
                <div class="col-sm">
                    <input type="text" name="author" id="author" class="form-control" placeholder=""
                        value="{{old('author',$artikel->author)}}" aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group">
                <div class="col-1">
                    <label for="tanggal" class="form-label">Tanggal</label>
                </div>
                <div class="col-sm-2">
                    <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder=""
                        value="{{old('tgl_publish',$artikel->tgl_publish)}}" aria-describedby="helpId">
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
    </form>
</div>
@endsection