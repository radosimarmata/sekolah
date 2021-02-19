<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<h2><a >gojos ngoding</a></h2>
	<h3>Data Siswa</h3>
 
	<a href="/siswa"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/siswa/kursus" method="post">
		{{ csrf_field() }}
		Nama <input type="varchar" name="nama" required="required"> <br/>
		Status <input type="varchar" name="status" required="required" > <br/>
		Position <input type="varchar" name="position" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>