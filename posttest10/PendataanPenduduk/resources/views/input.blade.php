<!-- resources/views/pesan.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
}}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>DATA</title>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
<h1>Form Pendataan Penduduk</h1>
<form method="post" action="{{ route('submit-data')
}}">
@csrf
<label for="nik">NIK:</label>
<input type="number" id="nik" name="nik"
required><br>
<label for="nama">nama:</label>
<input type="text" id="nama" name="nama"
required><br>
<label for="provinsi">provinsi:</label>
<input type="text" id="provinsi" name="provinsi"
required><br>
<label for="kota">kota:</label>
<input type="text" id="kota" name="kota"
required><br>
<label for="telpon">telpon:</label>
<input type="number" id="telpon" name="telpon"
required><br>
<button type="submit">Submit data</button>
</form>
</body>
</html>