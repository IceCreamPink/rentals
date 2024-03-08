@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Lenkap</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Hak Akses</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                @php
                    $no=1;
                @endphp
                @foreach ($users as $user)
                <tbody>
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->nama_lengkap }}</td>
                        <td>{{ $user->alamat }}</td>
                        <td>{{ $user->no_hp }}</td>
                        <td>{{ $user->hak_akses }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-danger" onclick="return confirm('yakin kah?')">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection