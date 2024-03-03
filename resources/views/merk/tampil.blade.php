@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('addmerk') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <br>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>No</th>
                    <th>Merk</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </thead>
                <tbody>
                    @php
                        $no=1;
                    @endphp
                    @foreach ($merks as $merk)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $merk->merk }}</td>
                            <td>
                                <a href="{{ route('editmerk', $merk->id) }}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('hapusmerk', $merk->id) }}" class="btn btn-danger" onclick="return confirm('yakinkah?')">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
