<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <title>Exova Indonesia</title>
    </head>
    <body>
        <div class="container">
        <h1>Welcome to wkwkwkLand</h1>
        <h2>Nama : {{ $nama }} <br>
        Anak Perusahaan :
        </h2>
        <table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
					</tr>
					@foreach($anak as $p)
					<tr>
						<td>{{ $p }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/edit/{{ $p }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p }}">Hapus</a>
						</td>
					</tr>
					@endforeach
		</table>
        </div>
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>