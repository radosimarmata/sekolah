<!DOCTYPE html>
<html>
<head>
	<title>C R U D</title>
</head>
<body>
 
	<h2><a >gojos ngoding</a></h2>
	<h3>Edit Siswa</h3>
 
	<a href="/siswa"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($siswa as $p)
	<form action="/siswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->user_id }}"> <br/>
		Nama <input type="varchar" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		Status <input type="varchar" required="required" name="status" value="{{ $p->status }}"> <br/>
		Position <input type="varchar" required="required" name="position" value="{{ $p->position }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>