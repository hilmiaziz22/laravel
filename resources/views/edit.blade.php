<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial Membuat Crud pada Laravel</title>
</head>
<body>
    
    <h2><a href="https://www.22ituhilmi.blogspot.com"></a>www.22ituhilmi.blogspot.com</h2>
    <h3>Edit Pegawai</h3>

    <a href="/pegawai">Kembali</a>
    <br/>
    <br/>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
        Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
        Umur <input type="text" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
        Alamat <textarea required ="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
        <input type="submit" value="Simpan Perubahan">
    </form>

    @endforeach
</body>
</html>