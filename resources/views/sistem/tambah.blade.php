@extends('layouts.main')

@section('container')
    <form action="/sistem/tampil" method="POST">
        @csrf
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
            <label for="sistemmhs">sistem mahasiswa</label><br><br>
            <input type="text" class="form-control" id="sistemmhs" name="sistemmhs" placeholder="sistemmhs"><br>
        </div>
        <div class="form-group">
            <label for="namasistem">nama sistem kuliah</label><br><br>
            <input type="text" class="form-control" id="namasistem" name="namasistem" placeholder="namasistem"><br>
        </div>           

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection