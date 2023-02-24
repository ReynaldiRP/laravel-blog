@extends('komponen.component')
@section('content')
<div class="card" style="width: 16rem;">
    <img src="{{ asset('test.png') }}" class="card-img-top" alt="test">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        <div class="d-grid gap-2">
            <button type="button" name="" id="" class="btn btn-primary">Read more</button>
        </div>
    </div>
</div>
@endsection