@extends('layouts.main')

@section('perpus')

<div class="bg-profile">
  <img src="{{ asset('img/background-profile.png') }}" alt="" style="width:100%; height:230px; border-radius:20px; margin-top:-10px;">
</div>
<div class="container">
<div class="profile-page">
  @if (isset(auth()->user()->image))
    <img class="img-profile rounded-circle" src={{ asset("storage/".auth()->user()->image)}} style="width: 150px; margin-top:-100px;">
    @else
    <img class="img-profile rounded-circle" src={{ asset("img/undraw_profile.svg")}} style="width: 150px; margin-top:-100px;">
    @endif
  <!--
  <img class="img-profile rounded-circle" src={{ asset("storage/".auth()->user()->image)}} style="width: 150px; margin-top:-100px;">-->
  <h1>Profil Pengguna</h1>
  <form action="/profile/{{ auth()->user()->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="image">Post Image</label>
            <input class="form-control" type="file" id="image"  name="image">
          <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}">
          </div>
          <div class="form-group">
            <label class="form-label">User Name</label>
            <input type="text" class="form-control" name="username" value="{{auth()->user()->username}}">
          </div>
          <div class="form-group">
            <label class="form-label">Nis</label>
            <input type="number" class="form-control" name="nis" value="{{auth()->user()->nis}}">
          </div>
          <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}">
          </div>
          <button type="submit" class="btn btn-warning">Edit</button>
</form>
</div>
</div>
<!--
    <form action="/profile/{{ auth()->user()->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <img class="img-profile rounded-circle" src={{ asset("storage/".auth()->user()->image)}} style="width: 100px;">
        {{-- <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="" style="width: 400px;"> --}}
        <div class="form-group">
          <label for="image">Post Image</label>
          <input class="form-control" type="file" id="image" name="image">
          <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
          </div>
          <div class="form-group">
            <label class="form-label">User Name</label>
            <input type="text" class="form-control" name="username" value="{{ auth()->user()->username }}">
          </div>
          <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}">
          </div>

          <button type="submit" class="btn btn-primary">Edit</button>
        </form>
      -->
@endsection