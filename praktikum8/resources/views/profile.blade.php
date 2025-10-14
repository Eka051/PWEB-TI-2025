<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Profile saya</h1>
    <?php
    // echo $kelas;
    ?>

    {{-- {{ $kelas }}

    <h1>Umur</h1>
    @if ($umur == 20)
        <h1>Kamu umur 20</h1>
    @else
        <h1>Kamu belum dewasa</h1>
    @endif --}}


    {{-- @dd($mahasiswa) --}}

    <table border="1">
        <thead>
            <th>Nomer</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['nim'] }}</td>
                    <td>{{ $mhs['prodi'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
