@extends('layouts.main')

@section('container')

    <h2>Are you sure delete periode {{$periode->name}}?</h2>
    <div class="mt-5">
        <a href="/destroy-periode/{{$periode->slug}}" class="btn btn-danger me-2">Sure</a>
        <a href="/periode" class="btn btn-info">Cancel</a>
    </div>
@endsection