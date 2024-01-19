@extends('layouts.main')

@section('container')
<div class="mt-5">
    <h1>Daftar Agama</h1>
</div>


    <div class="mt-5 d-flex justify-content-end">
        <a href="add-periode" class="btn btn-primary">Tambahkan Periode</a>
    </div>

    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Periode</th>
                    <th>Bulan Awal</th>
                    <th>Bulan Akhir</th>
                    <th>Tanggal Awal</th>
                    <th>Tanggal Akhir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($periode as $item)
                <tr>
                    <td>{{ $item->periode }}</td>
                    <td>{{ $item->bulanawal }}</td>
                    <td>{{ $item->bulanakhir }}</td>
                    <td>{{ $item->tgl_awal }}</td>
                    <td>{{ $item->tgl_akhir }}</td>
                    <td>
                        <div class="btn btn-warning">
                            <a href="edit-periode/{{$item->slug}}">Edit</a>
                        </div> 
                        <div class="btn btn-danger">
                            <a href="delete-periode/{{$item->slug}}">Delete</a> 
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
    
@endsection