@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('user.index') }}" class="btn btn-primary">Lihat Data</a>
        </div>
               <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
      
            <div class="from-group">
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Username"  class="form-control" value="{{ $user->username }}">
            </div>
            <div class="from-group">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password"  class="form-control"value="{{ $user->pasword }}">
            </div>
            <div class="from-group">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_lengkap"  class="form-control"value="{{ $user->nama_lengkap}}">
            </div>
            <div class="from-group">
                <label for="">No HP</label>
                <input type="text" name="no_hp" placeholder="No HP" class="form-control"value="{{ $user->no_hp }}">
            </div>
            <div class="from-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat" placeholder="Alamat" class="form-control"value="{{ $user->alamat}}">
            </div>
            <div class="from-group">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control"value="{{ $user->email }}">
            </div>
            <div class="from-group">
                <Label>Hak Akses</Label>
                <select name="hak_akses" class="form-control">
                    <option value="">-=Hak Akses=-</option>
                    <option value="admin"@selected($user->hak_akses == 'admin')>Admin</option>
                    <option value="pegawai"@selected($user->hak_akses == 'pegawai')>Pegawai</option>
                </select>
            </div>
            <br>
            <div class="from-group">
                <button type="submit" class="btn btn-success">Sumbit</button>
            </div>
        </div>
    </form>
    </div>
@endsection