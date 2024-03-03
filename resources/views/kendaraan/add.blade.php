@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Lihat Data</a>
        </div>
        <form action="{{ route('kendaraan.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="">Nama Kendaraan</label>
                    <input type="text" name="nama_kendaraan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Model</label>
                    <select name="type" class="form-control">
                        <option value="">-=Pilih Model=-</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->tipe }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="merk">Merk</label>
                    <select name=""  class="form-control">
                        <option value="">-=Pilih Merk=-</option>
                        @foreach ($merks as $merk)
                            <option value="{{ $merk->id }}">{{ $merk->merk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Plat No</label>
                    <input type="text" name="plat_no" id="plat_no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tahun Produksi</label>
                    <input type="text" name="tahun_produksi" id="tahun_produksi" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">-=Pilih Status=-</option>
                        <option value="tersedia">Tersedia</option>
                        <option value="disewa">Disewa</option>
                        <option value="perbaikan">Perbaikan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tarif</label>
                    <input type="number" name="tarif" id="tarif" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Sumbit</button>
                </div>
            </div>
        </form>
    </div>
@endsection