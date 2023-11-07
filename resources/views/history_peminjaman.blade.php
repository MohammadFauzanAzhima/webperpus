@extends('layouts.main')

@section('perpus')
<h1 class="h3 mb-2 text-gray-800">History Peminjaman</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTables" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name User</th>
                                            <th>Nama Buku</th>
                                            <th>Kategori Barang</th>
                                            <th>Tanggal Peminjaman</th>
                                            {{-- <th>Tanggal Pengembalian</th> --}}
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peminjaman as $pinjaman)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pinjaman->namauser }}</td>
                                            <td>{{ $pinjaman->namabuku }}</td>
                                            <td>{{ $pinjaman->kategori }}</td>
                                            <td>{{ $pinjaman->created_at->format('d M Y') }}</td>
                                            <td>{{ $pinjaman->status }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


@endsection