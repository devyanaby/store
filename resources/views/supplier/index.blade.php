@extends('layouts.default')

@section('title', 'supplier')

@section('content')
    <div class="d-flex align-items-center mb-3">
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Manage supplier</li>
            </ol>
            <h1 class="page-header mb-0">Manage supplier</h1>
        </div>
        <div class="ms-auto">
            <a href="{{ route('supplier.create') }}" class="btn btn-success btn-rounded px-4 rounded-pill">
                <i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Tambah supplier
            </a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="card border-0 mb-4">
        <div class="card-header h6 mb-0 bg-none p-3">
            <i class="fa fa-utensils fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Daftar supplier
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th class="pt-0 pb-2">No</th>
                            <th class="pt-0 pb-2">Nama supplier</th>
                            <th class="pt-0 pb-2">Kategori</th>
                            <th class="pt-0 pb-2">Harga</th>
                            <th class="pt-0 pb-2">Gambar</th>
                            <th class="pt-0 pb-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
					
					@if(isset($supplier))
					@foreach($supplier as $supplier)
						<tr>
							<td class="align-middle">{{ $loop->iteration }}</td>
							<td class="align-middle">{{ $supplier->nama_supplier }}</td> <!-- Ganti 'Nama' dengan 'nama_supplier' -->
							<td class="align-middle">{{ $supplier->kategori->nama_kategori }}</td> <!-- Ganti 'Nama' dengan 'nama_kategori' -->
							<td class="align-middle">{{ number_format($supplier->harga, 2) }}</td>
							<td class="align-middle">
								@if ($supplier->gambar)
									<img src="{{ asset($supplier->gambar) }}" alt="{{ $supplier->nama_supplier }}" class="img-thumbnail" style="width: 50px; height: 50px;">
								@else
									-
								@endif
							</td>
							<td class="align-middle">
								<a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST" style="display:inline;">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger btn-sm">Hapus</button>
								</form>
							</td>
						</tr>
						@endforeach
                        
                    </tbody>
                </table>
                {{ $supplier->links() }}
                @endif
            </div>
        </div>
    </div>
@endsection
