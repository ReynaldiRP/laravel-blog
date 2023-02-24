@extends('komponen.component')
@section('css')
@endsection
@section('content')
<form action="{{ route('kategori.index') }}">
    <button type="submit" class="btn btn-success">tambah</button>
</form>
<div class="row">
    <div class="col-md-12">
        <div class="table-wrap">
            <table class="table table-responsive-xl">
                <thead>
                    <tr>
                        <th>nama kategori</th>
                        <th>jenis kategori</th>
                        <th>Action</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $value)
                    <tr class="alert" role="alert">
                        <td>{{$value->nama}}</td>
                        <td>{{$value->jenis}}</td>
                        <td>
                            <form action="{{ route('kategori.edit', ['id'=>$value->idKategori])}}">
                                <div class="d-grid gap-2 mb-2">
                                    <button type="submit" name="update" id="update"
                                        class="btn btn-primary">Edit</button>
                                </div>
                            </form>
                            <form onsubmit="return confirm('yakin hapus ?')"
                                action="{{ route('kategori.destroy', ['id'=>$value->idKategori])}}">
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