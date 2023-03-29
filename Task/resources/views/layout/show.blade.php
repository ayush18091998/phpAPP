@extends('layout.main')

@section('mainSection')
<h2 class="text-center">ALL USERS DETAILS</h2></br>
<table class="table table-striped">
  <thead>
    <tr class="bg-primary text-white bg-gradient">
      <th scope="col">id</th>
      <th scope="col">userName</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col" >ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($allUsers as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->userName}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->created_at}}</td>
      <td>{{$user->updated_at}}</td>
      <td class="d-flex">
        <a href="http://127.0.0.1:8000/deleting/{{$user->id}}" >
            <button type="button" class="btn btn-danger" name="delete">DELETE</button>
        </a>
        <a href="http://127.0.0.1:8000/pass/{{$user->id}}" >
        <button type="button" class="btn btn-success">EDIT</button>
        </a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endSection