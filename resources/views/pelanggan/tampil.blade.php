@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Email</th>
                        <th>Nik</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no=1;
                    @endphp
                    @foreach ($pelanggans as $pelanggan)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pelanggan->nama_pelanggan }}</td>
                        <td>{{ $pelanggan->alamat }}</td>
                        <td>{{ $pelanggan->no_hp }}</td>
                        <td>{{ $pelanggan->email }}</td>
                        <td>{{ $pelanggan->nik }}</td>
                        <td>
                            <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('pelanggan.show', $pelanggan->id) }}" class="btn btn-danger" onclick="return confirm('yakinkah?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection