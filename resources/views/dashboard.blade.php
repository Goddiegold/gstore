@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex align-items-center justify-content-between"><h1>Users Record</h1>
  <a class="btn btn-primary"   href="{{ route('logout') }}">Logout</a></div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Registered On</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection