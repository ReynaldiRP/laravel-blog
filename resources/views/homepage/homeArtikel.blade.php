@extends('komponen.component')
@section('css')
@endsection
@section('content')
<form action="{{ route('artikel.index') }}">
    <button type="submit" class="btn btn-success">tambah</button>
</form>
<div class="row">
    <div class="col-md-12">
        <div class="table-wrap">
            <table class="table table-responsive-xl">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Slug</th>
                        <th>Gambar</th>
                        <th>Konten</th>
                        <th>Kategori</th>
                        <th>Author</th>
                        <th>Tanggal Publish</th>
                        <th>Action</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artikel as $value)
                    <tr class="alert" role="alert">
                        <td>{{$value->judul}}</td>
                        <td>{{$value->slug}}</td>
                        <td><img src="{{ asset($value->gambar) }}" width="60%" alt="Artikel Image"></td>
                        <td>{{$value->konten}}</td>
                        <td>{{ optional($value->kategori)->nama }}</td>
                        <td>{{$value->author}}</td>
                        <td>{{$value->tgl_publish}}</td>
                        <td>
                            <form action="{{ route('artikel.edit', ['id'=>$value->id])}}">
                                <div class="d-grid gap-2 mb-2">
                                    <button type="submit" name="update" id="update"
                                        class="btn btn-primary">Edit</button>
                                </div>
                            </form>
                            <form onsubmit="return confirm('yakin hapus ?')"
                                action="{{ route('artikel.destroy', ['id'=>$value->id])}}">
                                <div class="d-grid gap-2">
                                    <button type="submit" name="delete" id="delete"
                                        class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection