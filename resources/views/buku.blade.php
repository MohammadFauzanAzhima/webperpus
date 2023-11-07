@extends('layouts.main')

@section('perpus')
<h1 class="h3 mb-2 text-gray-800">Daftar Buku</h1>
                    <!-- DataTales Example -->


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1">Judul</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
              <label for="image">Post Image</label>
              <input class="form-control" type="file" id="image" name="image">
           
          </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Pengarang</label>
                <input type="text" class="form-control" name="pengarang">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Penerbit</label>
                <input type="text" class="form-control" name="penerbit">
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option value="Pendidikan">Pilih Jenis Kategori</option>
                  <option value="Fiksi">Fiksi</option>
                  <option value="Non Fiksi">Non Fiksi</option>
                  </select>
                </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi">
              </div>
              <button class="btn btn-primary" type="submit">Tambah</button>
        </form>
        </div>
      </div>
    </div>
  </div>


                    
                    <div class="card shadow mb-4">
                      @can('admin')
                        <div class="card-header py-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                              </button>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success mt-4" role="alert">
                            {{ $message }}
                        </div>
                        @endif
                        </div>
                        @endcan
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTables" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Tanggal Arsip</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $buku) 
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <!--
                                            <td>
                                              <img src="{{ asset('storage/'.$buku->image) }}" alt="" style="width: 150px">
                                            </td>
                                            -->
                                            <td>{{ $buku->judul }}</td>
                                            
                                            <td>{{ $buku->kategori }}</td>
                                            <td>{{ $buku->created_at->format('d M Y') }}</td>
                                            
                                            <td class="d-flex justify-content-center">
                                              @can('admin')
                                                <form action="{{ route('buku.destroy', $buku) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <button class="btn btn-danger btn-sm" style="margin-right: 5px" type="submit"><img src="img/trash-2.png" width="20px" height="19px"></button>
                                                </form>
                                                 <form>
                                                <a type="button" class="btn btn-warning btn-sm" style="margin-right: 5px" data-toggle="modal" data-target="#edit{{ $buku->id }}">
                                                  <img src="img/edit.png" width="20px" height="19px">
                                                </a>
                                              </form>
                                              @endcan
                                              <form>
                                                <a href="{{ route('buku.show', $buku->id) }}" type="button" class="btn btn-success btn-sm">
                                                  <img src="img/detail.png" width="20px" height="19px">
                                                </a>
                                              </td>
                                              
                                            </form>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="edit{{ $buku->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">
                                                          <form action="{{ route('buku.update', $buku) }}" method="POST">
                                                              @csrf
                                                              @method('PATCH')
                                                              <div class="form-group">
                                                                  <label for="exampleInputPassword1">Judul</label>
                                                                  <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="exampleInputPassword1">Pengarang</label>
                                                                  <input type="text" class="form-control" name="pengarang" value="{{ $buku->pengarang }}">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="exampleInputPassword1">Penerbit</label>
                                                                  <input type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}">
                                                              </div>
                                                              <div class="form-group">
                                                                <label>Kategori</label>
                                                                <select class="form-control" name="kategori">
                                                                  <option value="Pendidikan">Pilih Jenis Kategori</option>
                                                                  <option value="Fiksi">Fiksi</option>
                                                                  <option value="Non Fiksi">Non Fiksi</option>
                                                                  </select>
                                                                </div>
                                                          
                                                            <div class="form-group">
                                                              <label for="exampleInputPassword1">Deskripsi</label>
                                                    
                                                              <input type="text" class="form-control" name="deskripsi" value="{{ $buku->deskripsi }}">
                                                          </div>
                                                                <button class="btn btn-primary" type="submit">Save</button>
                                                          </form>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        
@endsection
<script>
    window.setTimeout(function(){
        $(".alert").fadeTo(100, 0).slideUp(80, function(){
            $(this).remove();
        });
    }, 3000);
</script>