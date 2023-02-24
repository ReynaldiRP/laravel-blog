@extends('komponen.component')
@section('content')

<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Add Artikel</h1>
    <hr>
    <form action="{{ route('artikel.create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mt-1">
            <div class="form-group">
                <div class="col-1">
                    <label for="judul" class="form-label">Judul</label>
                </div>
                <div class="col-sm-12">
                    <input type="text" name="judul" id="judul" class="form-control" placeholder=""
                        aria-describedby="helpId">
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
                        aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group">
                <div class="col-1">
                    <label for="konten" class="form-label">Konten</label>
                </div>
                <div class="col-sm">
                    <textarea name="konten" id="konten" class="form-control" placeholder=""
                        aria-describedby="helpId"></textarea>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group">
                <label for="kategori" class="form-label">Pili Nama Kategori</label>
                <select class="form-select form-select-lg" name="kategori" id="kategori">
                    @foreach ($add_Kategori as $item)
                    <option value="{{$item->idKategori}}">{{$item->nama}}</option>
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
                        aria-describedby="helpId">
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
                        aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group">
                <div class="col-1">
                    <div class="d-grid gap-2">
                        <button type="submit" name="" id="" class="btn btn-success">Insert</button>
                    </div>
                </div>
            </div>
    </form>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                $('#gambar-preview').attr('src', e.target.result).show();
            }
            reader.readAsDataURL(input.files[0]);
            }              
        }
        $("#gambar").change(function() {
        readURL(this);
        });   
    </script>
</div>
@endsection