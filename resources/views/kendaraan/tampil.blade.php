@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah kendaraan</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kendaraan</th>
                        <th>Merk</th>
                        <th>Model</th>
                        <th>Plat No</th>
                        <th>Tahun</th>
                        <th>Status</th>
                        <th>Tarif</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                @php
                    $no =1;
                @endphp
                @foreach ($kendaraans as $kendaraan)
                    
                <tbody>
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kendaraan->nama_kendaraan }}</td>
                        <td>{{ $kendaraan->merk }}</td>
                        <td>{{ $kendaraan->type }}</td>
                        <td>{{ $kendaraan->plat_no }}</td>
                        <td>{{ $kendaraan->tahun_produksi }}</td>
                        <td>{{ $kendaraan->status }}</td>
                        <td>{{ $kendaraan->tarif }}</td>
                        <td>
                            <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('kendaraan.show', $kendaraan->id) }}" class="btn btn-danger" onclick="return confirm('yakin kah?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection