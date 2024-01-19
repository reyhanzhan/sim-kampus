@extends('layouts.main')

@section('container')

    <h3>Tambahkan agama baru</h3>

    <div class="mt-5 w-30">

        @if ($errors->any())
            <div class="alert alert-fanger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif

        <form action="add-agama" method="post">
            @csrf
            <div>
                <label for="kodeagama" class="form-label">Kode Agama</label>
                <input type="text" name="kodeagama" id="kodeagama" class="form-control" placeholder="Kode agama">
            </div>

            <div>
                <label for="namaagama" class="form-label">Nama Agama</label>
                <input type="text" name="namaagama" id="namaagama" class="form-control" placeholder="Nama agama">
            </div>

            <div class="mt-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
    @endsection