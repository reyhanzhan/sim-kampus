@extends('layouts.main')

@section('container')
    <form action="/status/tampil" method="POST">
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
            <label for="statusmhs">status mahasiswa</label><br><br>
            <input type="text" class="form-control" id="statusmhs" name="statusmhs" placeholder="statusmhs"><br>
        </div>
        <div class="form-group">
            <label for="namastatus">nama status</label><br><br>
            <input type="text" class="form-control" id="namastatus" name="namastatus" placeholder="namastatus"><br>
        </div>           

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
