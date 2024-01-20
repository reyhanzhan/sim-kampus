@extends('layouts.main')

<<<<<<< HEAD
<<<<<<< HEAD
@section('container')
<<<<<<< HEAD
=======
@section('container')
>>>>>>> origin/dev_rosii
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
<<<<<<< HEAD
                            <a href="edit-agama/{{$item->slug}}">Edit</a>
                        </div> 
                        <div class="btn btn-danger">
                            <a href="delete-agama/{{$item->slug}}">Delete</a> 
=======
                            <a href="edit-agama/{{$item->slug}}">edit</a>
                        </div> 
                        <div class="btn btn-danger">
                            <a href="delete-agama/{{$item->slug}}">delete</a> 
>>>>>>> origin/dev_rosii
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
    
<<<<<<< HEAD
=======
<h1>hlmn agama</h1>
>>>>>>> origin/dev_andyegh
=======
@section('title', 'Dashboard')

@section('container')

    
    <h1>ini halaman agama</h1>

>>>>>>> origin/dev_bale
=======
>>>>>>> origin/dev_rosii
@endsection