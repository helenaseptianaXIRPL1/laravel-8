@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col col-lg-6 col-md-4">


      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center " >
            <img src="{{ url('images/') }}/{{ $user->foto }}" alt="profil" class="profile-user-img img-responsive img-circle">
          </div>
          <form action="/editprofil" method="POST">
            @method('put')
            @csrf
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input type="file" value="foto" name="foto" id="foto">
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Upload</button>
                </div>
              </div>
            </div>
          </form>
          <hr>
          <form action="/editprofil" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text"  value="{{ old('name', $user->name) }}" id="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="phone">Alamat</label>
              <input type="text"  value="{{ old('alamat', $user->alamat) }}" id="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Email</label>
                <input type="text"  value="{{ old('email', $user->email) }}" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">No Tlp</label>
                <input type="text"  value="{{ old('phone', $user->phone) }}" id="phone" class="form-control">
              </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
