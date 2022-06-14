@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col col-lg-6 col-md-4">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
            @foreach ($users as $user)

            @endforeach
          <div class="text-center">
            <img src="{{ url('images') }}/{{ $user->foto }}" alt="profil" class="profile-user-img img-responsive img-circle">
          </div>
          <h3 class="profile-username text-center">{{ $user->name }}</h3>
          <p class="text-muted text-center">Member sejak : {{ $user->created_at }}</p>
          <hr>
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
            Alamat
          </strong>
          <p class="text-muted">
            {{ $user->alamat }}
          </p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted">
            {{ $user->email }}
          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            No Tlp
          </strong>
          <p class="text-muted">
            {{ $user->phone }}
          </p>
          <hr>
          <a href="/editprofil" class="btn btn-primary btn-block">Edit</a>
        </div>
      </div>
    </div>

@endsection
