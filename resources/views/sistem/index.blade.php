@extends('layouts.main')

@section('container')
    <a class="btn btn-primary btn-sm my-3" href="/sistem/tampil">Tambah data</a>

    <table class="table">
        <thead>
            <tr>
                {{-- <th scope="col">nomor</th> --}}
                <th scope="col">sistem mahasiswa</th>
                <th scope="col">nama sistem</th>
            </tr>
        </thead>
        @forelse ($sistem as $index => $sistem)
            <tbody>
                <tr>
                    {{-- <th scope="row">{{ $index + 1 }}</th> --}}
                    <td>{{ $sistem->id }}</td>
                    <td>{{ $sistem->namasistem }}</td>
                    <td>
                        <form action="/sistem/{{ $sistem->id }}" method="POST">
                        <a href="/sistem/{{ $sistem->id }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/sistem{{ $sistem->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            @method('delete')
                            @csrf
                            <input type="submit" value="delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
            @empty
            <tr>
                <td>Tidak ada data sistem</td>
            </tr>
            </tbody>
        @endforelse
    </table>

@endsection