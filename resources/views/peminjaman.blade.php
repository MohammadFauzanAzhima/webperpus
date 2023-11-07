@extends('layouts.main')

@section('perpus')
<h1 class="h3 mb-2 text-gray-800">Peminjaman Buku</h1>
                    <!-- DataTales Example -->

                    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Peminjaman</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('peminjaman.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1">Nama User</label>
                <input type="text" class="form-control" name="namauser">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Buku</label>
                <input type="text" class="form-control" name="namabuku">
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option value="Pendidikan">Pilih Jenis Kategori</option>
                  <option value="Fiksi">Fiksi</option>
                  <option value="Non Fiksi">Non Fiksi</option>
                  </select>
                </div>
              <button class="btn btn-primary" type="submit">Tambah</button>
        </form>
        </div>
      </div>
    </div>
  </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTables" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama User</th>
                                            <th>Nama Buku</th>
                                            <th>Kategori Buku</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Status</th>
                                            @can('admin')
                                            <th>Action</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $peminjaman)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $peminjaman->namauser}}</td>
                                            <td>{{ $peminjaman->namabuku }}</td>
                                            <td>{{ $peminjaman->kategori }}</td>
                                            <td>{{ $peminjaman->created_at->format('d M Y') }}</td>
                                            <td>{{ $peminjaman->status }}</td>
                                            @can('admin')
                                            <form action="{{ route('peminjaman.update', ['id' => $peminjaman->id]) }}" method="POST">
                                              @csrf
                                              @method('PATCH')
                                              <td>
                                              <button type="submit" name="accept" class="btn btn-success">Accept</button>
                                              <button type="submit" name="reject" class="btn btn-danger">Reject</button>
                                            </td>
                                          </form>
                                            @endcan
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

@endsection