@extends('layouts.main')

@section('container')

    <h3>Edit Periode</h3>

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

        <form action="/edit-periode/{{$periode->slug}}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="periode" class="form-label">Periode</label>
                <input type="text" name="periode" id="periode" class="form-control" placeholder="Periode ...">
            </div>

            <div>
                <label for="bulanawal" class="form-label">Bulan Awal</label>
                <input type="text" name="bulanawal" id="bulanawal" class="form-control" placeholder="Bulan Awal ...">
            </div>

            <div>
                <label for="bulanakhir" class="form-label">Bulan Akhir</label>
                <input type="text" name="bulanakhir" id="bulanakhir" class="form-control" placeholder="Bulan Akhir ...">
            </div>

            <div>
                <label for="tgl_awal" class="form-label">Tanggal Awal</label>
                <input type="text" name="tgl_awal" id="tgl_awal" class="form-control" placeholder="Tanggal Awal ...">
            </div>

            <div>
                <label for="tgl_akhir" class="form-label">Tanggal Akhir</label>
                <input type="text" name="tgl_akhir" id="tgl_akhir" class="form-control" placeholder="Tanggal Akhir ...">
            </div>

            <div class="mt-3">
                <button class="btn btn-success" type="update">Save</button>
            </div>
        </form>
    </div>
    @endsection