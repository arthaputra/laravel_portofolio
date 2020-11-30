@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div>
        <form action="/home/add" method="post" enctype="multipart/form-data">
        @csrf
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Teman</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <input type="text" id="nama_teman" name="nama_teman" class="form-control @error('nama_teman') is-invalid @enderror" autocomplete="nama_teman">
                        @error('nama_teman')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </td>
                        <td>
                        <input type="file" name="foto_teman" class="form-control @error('foto_teman') is-invalid @enderror" autocomplete="foto_teman">
                        @error('foto_teman')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </td>
                        <td><button class="btn btn-success" type="submit">Tambahkan</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Teman</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teman as $t)
                    <tr>
                        <td>{{ $t->nama_teman }}</td>
                        <td>{{ $t->foto_teman }}</td>
                        <td><button class="btn btn-danger"><a class="text-white text-decoration-none" href="/home/hapus/{{ $t->id }}">Hapus</a></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
