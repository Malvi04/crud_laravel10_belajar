<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
</head>
<body>
    <h3>Data Pegawai</h3>
    <a href="/pegawai">Kembali</a>

    <br><br>

    <form action="/store" method="post">
        {{-- memvalidasi otomatis --}}
        {{ csrf_field() }}
        <label for="">Nama</label>
        <input type="text" name="nama" required>
        <br>
        <label for="">Jabatan</label>
        <input type="text" name="jabatan" required>
        <br>
        <label for="">Umur</label>
        <input type="text" name="umur" required>
        <br>
        <label for="">Alamat</label>
        <textarea type="text" name="alamat" required></textarea>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
