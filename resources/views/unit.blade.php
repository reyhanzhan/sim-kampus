@extends('layouts.main')
@section('container')
    <h3><center>Halaman Tabel Agama</center></h3>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalUnitTambah"> 
        Pilih Agama  
    </button>

    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">Nama Mahasiswa</td>
                <td align="center">Kode Agama</td>
                <td align="center">Ketua</td>
                <td align="center">Nama Agama</td>
        
            </tr>
        </thead>

        <head>
            <title>BELAJAR CRUD DATA AGAMA</title>
        </head>
        <body>
         
            <h2>CRUD DATA AGAMA</h2>
            <br/>
            <a href="index.php">KEMBALI</a>
            <br/>
            <br/>
            <h3>TAMBAH DATA MAHASISWA</h3>
            <form method="post" action="tambah_aksi.php">
                <table>
                    <tr>			
                        <td>Nama</td>
                        <td><input type="text" name="nama mahasiswa"></td>
                    </tr>
                    <tr>
                        <td>gelar</td>
                        <td><input type="number" name="kode agama"></td>
                    </tr>
                    <tr>
                        <td>ketua</td>
                        <td><input type="text" name="ketua"></td>
                    </tr>
                    <tr>
                        <td>agama</td>
                        <td><input type="text" name="nama agama"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="SIMPAN"></td>
                    </tr>		
                </table>
            </form>
        </body>
        </html>

        
    
@endsection