@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Lihat Data</a>
        </div>
        <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="">Nama Kendaraan</label>
                    <input type="text" name="nama_kendaraan" class="form-control" value="{{ $kendaraan->nama_kendaraan }}">
                </div>
                <div class="form-group">
                    <label for="">Model</label>
                    <select name="type" class="form-control">
                        <option value="">-=Pilih Model=-</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" @selected($kendaraan->id_type == $type->id)>{{ $type->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Merk</label>
                    <select name="merk"  class="form-control">
                        <option value="">-=Pilih Merk=-</option>
                        @foreach ($merks as $merk)
                            <option value="{{ $merk->id }}" @selected($kendaraan->id_merk == $merk->id)>{{ $merk->merk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Plat No</label>
                    <input type="text" name="plat_no" id="plat_no" class="form-control" value="{{ $kendaraan->plat_no }}">
                </div>
                <div class="form-group">
                    <label for="">Tahun Produksi</label>
                    <input type="text" name="tahun_produksi" id="tahun_produksi" class="form-control" value="{{ $kendaraan->tahun_produksi }}">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">-=Pilih Status=-</option>
                        <option value="tersedia" @selected($kendaraan->status =='tersedia')>Tersedia</option>
                        <option value="disewa"@selected($kendaraan->status =='disewa')>Disewa</option>
                        <option value="perbaikan"@selected($kendaraan->status =='perbaikan')>Perbaikan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tarif</label>
                    <input type="number" name="tarif" id="tarif" class="form-control" value="{{ $kendaraan->tarif }}">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Sumbit</button>
                </div>
            </div>
        </form>
    </div>
@endsection