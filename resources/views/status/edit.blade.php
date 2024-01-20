@extends('layouts.main')

@section('container')

<form action="/status/{{ $status->id }}" method="POST">
    @csrf
    @method('put')
    {{-- validation --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-group">
        <label for="statusmhs">status mhs</label><br><br>
        <input type="text" value="{{ $status->id }}" class="form-control" id="statusmhs" name="statusmhs" placeholder="kode agama"><br>
    </div>
    <div class="form-group">
        <label for="namastatus">nama status</label><br><br>
        <input type="text" value="{{ $status->namastatus }}" class="form-control" id="namastatus" name="namastatus" placeholder="nama agama"><br>
    </div>           

    <button type="submit" class="btn btn-warning">Update</button>
</form>
@endsection