<!-- <!DOCTYPE html>
<html>
<head>
    <title>gojos ngoding</title>
</head>
<body>
    @foreach($liat as $li)
    <a>Nama : {{ $li->name }}</a>
    <br>Email : {{ $li->email }}</br>
    <br>Hak Akses : {{ $li->hak_akses }}</br>
    @endforeach
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>
</head>
<body>
    <h3>Daftar User</h3>
    <table border="1">
        <tr>
            <th>No.</th>
            <th width="150px">Hak Askses</th>
            <th width="200px">Nama</th>
            <th width="200px">E-Mail</th>
        </tr>
        @php
            $no = 1;    
        @endphp
        @foreach($liat as $li)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $li->hak_akses }}</td>
            <td>{{ $li->name }}</td>
            <td>{{ $li->email }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>