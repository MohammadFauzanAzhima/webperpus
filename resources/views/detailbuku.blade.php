@extends('layouts.main')

@section('perpus')
<h1 class="h3 mb-2 text-dark">Detail Buku</h1>
<div class="card shadow mb-4">
  <div class="card-body" style="margin-left: 30px; margin-bottom: 30px; margin-top: 30px;">
      <div class="row text-dark">
          <div class="col-md-6">
              <img src="{{ asset('storage/'.$buku->image) }}" alt="" style="width: 400px;">
          </div>
          <div class="col-md-6">
              <h1>Judul : {{ $buku->judul }}</h1>
              <h3>Pengarang : {{ $buku->pengarang }}</h3>
              <h3>Penerbit  : {{ $buku->penerbit }}</h3>
              <h3>Kategori  : {{ $buku->kategori }}</h3>
              <br>
              <h5>Deskripsi : </h5>
              <h5>{{ $buku->deskripsi }}</h5>
          </div>
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