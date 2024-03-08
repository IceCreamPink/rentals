@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('pelanggan.index') }}" class="btn btn-primary">Lihat Data</a>
        </div>
        <div class="card-body">
          <form action="{{ route('pelanggan.store') }}" method="post">
            @csrf
              <div class="form-group">
                <label for="">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan"  placeholder="Nama Pelanggan"class="form-control">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat"  placeholder="Alamat"class="form-control">
            </div>
            <div class="form-group">
                <label for="No HP">No HP</label>
                <input type="number" name="no_hp"  placeholder="No HP"class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email"  placeholder="Email"class="form-control">
            </div>
            <div class="form-group">
                <label for="">NIK</label>
                <input type="number" name="nik"  placeholder="NIK"class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Sumbit</button>
        </form>
        </div>
    </div>
@endsection