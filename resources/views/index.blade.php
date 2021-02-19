<!DOCTYPE html>
<html>
<head>
	<title>C R U D</title>
</head>
<body>
 
	<h2><a href="http://localhost:8000/home">gojos ngoding</h2>
	<h3>Data Siswa</h3>
 
	<a href="/siswa/tambah"> + Tambah Siswa Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Status</th>
			<th>Jabatan</th>
			<th>Opsi</th>

		</tr>
		@foreach($siswa as $p)
		<tr>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->status }}</td>
			<td>{{ $p->position }}</td>
			<td>
				<a href="/siswa/edit/{{ $p->user_id }}">Edit</a>
				|
				<a href="/siswa/hapus/{{ $p->user_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>