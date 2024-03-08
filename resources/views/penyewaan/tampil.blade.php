@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header ">
            <a href="{{ route('penyewaan.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Nama Kendaraan</th>
                        <th>Tgl Pinjam</th>
                        <th>Tgl Kembali</th>
                        <th>Biaya Sewa</th>
                        <th>Tgl Kembalian</th>
                        <th>Denda</th>
                        <th>Kondisi Kendaraan</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                @php
                    $no=1;
                @endphp
                @foreach ($Penyewaans as $sewa)
                    <tbody>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $sewa->nama_pelanggan }}</td>
                            <td>{{ $sewa->nama_kendaraan }}</td>
                            <td>{{ $sewa->tgl_pinjam }}</td>
                            <td>{{ $sewa->tgl_kembali }}</td>
                            <td>{{ $sewa->total_biaya }}</td>
                            <td>{{ $sewa->tgl_pengembalian }}</td>
                            <td>{{ $sewa->denda }}</td>
                            <td>{{ $sewa->kondisi_kendaraan }}</td>
                            <td>{{ $sewa->status }}</td>
                            <td>
                                <a href="{{ route('penyewaan.edit', $sewa->id) }}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('penyewaan.show', $sewa->id) }}" class="btn btn-danger" onclick="return confirm('yakin kah?')">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection