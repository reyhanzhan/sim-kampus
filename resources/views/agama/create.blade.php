

@extends('layoutsreferensi.master')

@section('content')

<div class="container">

<h1>Masyukkan data Agama</h1><br>
<form action="/agama/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kode Agama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Agama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <select class="form-select" name="jenis_kelamin">
        <option value="">Pilih Jenis kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select> <br><br>
    
    <input type="submit" name="submit" class="btn btn-success" value="Save">
</form>

</div>
@endsection

