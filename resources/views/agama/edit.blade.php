<h1>Monggo yang mau edit data Agama</h1>

<form action="/agama/{{$agama->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama" placeholder="Nama" value="{{$agama->nama}}"><br>
    <input type="text" name="kode_agama" placeholder="Kode Agama" value="{{$agama->kode_agama}}"><br>
    <input type="text" name="nama_agama" placeholder="Nama Agama" value="{{$agama->nama_agama}}"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis kelamin</option>
        <option value="L" @if($agama->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
        <option value="P" @if($agama->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select> <br><br>
    
    <input type="submit" name="submit" value="Update">
</form>