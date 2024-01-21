<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <br><br>
    <div class="container">
        <a class="btn btn-primary" href="/agama/create">Tambahkan data Agama</a>
    <br>
    <br>
    <table class="table table-dark table-hover">
        <tr>
            <th>NAMA</th>
            <th>KODE AGAMA</th>
            <th>NAMA AGAMA</th>
            <th>JENIS KELAMIN</th>
            <th>AKSI</th>
        </tr>
        
        <tr>
        @foreach ($agama as $a)
            
            <td>{{$a->nama}}</td>
            <td>{{$a->kode_agama}}</td>
            <td>{{$a->nama_agama}}</td>
            <td>{{$a->jenis_kelamin}}</td>

            <td>
                <a href="/agama/{{$a->id}}/edit">Edit&Ralat</a>
                <form action="/agama/{{$a->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            
            </td>

        </tr>
        @endforeach
    </table>
    </div>    


</body>
</html>


