@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('type.create') }}" class=" btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class=" table table-striped table-bordered">
                <thead>
                   <tr>
                     <th>No</th>
                    <th>Model</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                   </tr>
                </thead>
                <?php
                $no =1;
                ?>
                <tbody>
                    @foreach ($types as $type)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $type->tipe }}</td>
                        <td>
                            <a href="{{ route('type.edit', [$type->id]) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('type.destroy', $type->id) }}" class="btn btn-danger" onclick="return confirm('yakin kah?')">Hapus</a>
                        </td>
                    </tr>
                       @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection