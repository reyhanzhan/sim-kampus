@extends('layouts.main')

@section('container')
<div class="mt-5">
    <h1>Daftar Agama</h1>
</div>


    <div class="mt-5 d-flex justify-content-end">
        <a href="add-agama" class="btn btn-primary">Tambahkan agama</a>
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
                    <th>Kode Agama</th>
                    <th>Nama Agama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agama as $item)
                <tr>
                    <td>{{ $item->kodeagama }}</td>
                    <td>{{ $item->namaagama }}</td>
                    <td>
                        <div class="btn btn-warning">
                            <a href="edit-agama/{{$item->slug}}">edit</a>
                        </div> 
                        <div class="btn btn-danger">
                            <a href="delete-agama/{{$item->slug}}">delete</a> 
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
    
@endsection