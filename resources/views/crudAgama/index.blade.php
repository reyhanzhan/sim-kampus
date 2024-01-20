@extends('layouts.main')

@section('container')
    <a class="btn btn-primary btn-sm my-3" href="/agama/tampil">Tambah data</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">nomor</th>
                <th scope="col">kode agama</th>
                <th scope="col">nama agama</th>
            </tr>
        </thead>
        @forelse ($agama as $index => $agama)
            <tbody>
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $agama->id }}</td>
                    <td>{{ $agama->nama_agama }}</td>
                    <td>
                        <form action="/agama/{{ $agama->id }}" method="POST">
                        <a href="/agama/{{ $agama->id }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/agama{{ $agama->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            @method('delete')
                            @csrf
                            <input type="submit" value="delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
            @empty
            <tr>
                <td>Tidak ada data Agama</td>
            </tr>
            </tbody>
        @endforelse
    </table>

@endsection