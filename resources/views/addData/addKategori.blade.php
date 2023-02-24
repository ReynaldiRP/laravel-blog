@extends('komponen.component')
@section('content')
<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Add Kategori</h1>
    <hr>
    <form action="{{ route('kategori.create') }}" method="post">
        @csrf
        <div class="row mt-1">
            <div class="form-group">
                <div class="col-1">
                    <label for="judul" class="form-label">Nama Kategori</label>
                </div>
                <div class="col-sm-12">
                    <input type="text" name="nama" id="nama" class="form-control" placeholder=""
                        aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="form-group">
                <div class="col-1">
                    <label for="judul" class="form-label">Jenis Kategori</label>
                </div>
                <div class="col-sm-12">
                    <input type="text" name="jenis" id="jenis" class="form-control" placeholder=""
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
        </div>
    </form>
</div>
@endsection