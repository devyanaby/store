@extends('layouts.default')

@section('title', 'produk')

@section('content')
    <div class="d-flex align-items-center mb-3">
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Manage produk</li>
            </ol>
            <h1 class="page-header mb-0">Manage produk</h1>
        </div>
        <div class="ms-auto">
            <a href="{{ route('produk.create') }}" class="btn btn-success btn-rounded px-4 rounded-pill">
                <i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Tambah produk
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
            <i class="fa fa-utensils fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Daftar produk
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th class="pt-0 pb-2">No</th>
                            <th class="pt-0 pb-2">Nama produk</th>
                            <th class="pt-0 pb-2">Kategori</th>
                            <th class="pt-0 pb-2">Harga</th>
                            <th class="pt-0 pb-2">Gambar</th>
                            <th class="pt-0 pb-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
					
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
