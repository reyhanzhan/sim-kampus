@extends('layouts.main')

@section('container')

    <h3>Edit agama</h3>

    <div class="mt-10 w-30">

        @if ($errors->any())
            <div class="alert alert-fanger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif

        <form action="/edit-agama/{{$agama->slug}}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="kodeagama" class="form-label">Kode Agama</label>
                <input type="text" name="kodeagama" id="kodeagama" class="form-control" placeholder="Kode agama">
            </div>

            <div>
                <label for="namaagama" class="form-label">Nama Agama</label>
                <input type="text" name="namaagama" id="namaagama" class="form-control" placeholder="Nama agama">
            </div>

            <div class="mt-3">
                <button class="btn btn-success" type="update">Save</button>
            </div>
        </form>
    </div>
    @endsection