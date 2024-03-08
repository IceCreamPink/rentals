@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('penyewaan.index') }}" class="btn btn-primary">Lihat Data</a>
        </div>
        
            <form action="{{ route('penyewaan.store') }}" method="post">
                @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="">Pelanggan</label>
                    <select name="id_pelanggan" id="pelanggan" class="form-control">
                        <option value="">-=Pilih Pelanggan=-</option>
                        @foreach ($pelanggans as $pelanggan)
                            <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama_pelanggan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Kendaraan</label>
                    <select name="id_kendaraan" id="kendaraan" class="form-control">
                        <option value="">-=Pilih Pelanggan=-</option>
                        @foreach ($kendaraans as $kendaraan)
                            <option value="{{ $kendaraan->id }}">{{ $kendaraan->nama_kendaraan . "-" . $kendaraan->plat_no }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Sumbit</button>
            </div>
            </form>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#pelanggan').select2();
            $('#kendaraan').select2();
        })
    </script>
@endsection