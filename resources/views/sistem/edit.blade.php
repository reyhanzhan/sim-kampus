@extends('layouts.main')

@section('container')

<form action="/sistem/{{ $sistem->id }}" method="POST">
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
        <label for="sistemmhs">sistem mhs</label><br><br>
        <input type="text" value="{{ $sistem->id }}" class="form-control" id="sistemmhs" name="sistemmhs" placeholder="kode agama"><br>
    </div>
    <div class="form-group">
        <label for="namasistem">nama sistem</label><br><br>
        <input type="text" value="{{ $sistem->namasistem }}" class="form-control" id="namasistem" name="namasistem" placeholder="nama agama"><br>
    </div>           

    <button type="submit" class="btn btn-warning">Update</button>
</form>
@endsection