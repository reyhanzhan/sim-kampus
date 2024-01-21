@extends('layouts.main')

@section('container')

    <h2>Are you sure delete agama {{$agama->name}}?</h2>
    <div class="mt-5">
        <a href="/destroy-agama/{{$agama->slug}}" class="btn btn-danger me-2">Sure</a>
        <a href="/agama" class="btn btn-info">Cancel</a>
    </div>
@endsection
    