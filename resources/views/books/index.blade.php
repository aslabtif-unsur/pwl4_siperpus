<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    @foreach ($buku as $satuan)
        <span>{{ $loop->iteration }}</span>. 
        <span>{{ $satuan['judul'] }}</span> - 
        <span>{{ $satuan['penerbit'] }}</span>
        <br>
    @endforeach
</body>
</html>