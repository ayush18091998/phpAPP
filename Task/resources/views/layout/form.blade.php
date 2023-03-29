@extends('layout.main')

@section('mainSection')
<div class="text-center">REGISTRATION FORM</div>
<form action="{{$url}}" method="post">
@csrf
<div class="mb-3">
    <label for="Name" class="form-label">User Name</label>
    <input type="userName" class="form-control" name="userName" value="{{old('userName')}}">
    <span class="text-danger">
        @error('userName')
        {{$message}}
        @enderror
    </span>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email"><span class="text-danger">
        @error('email')
        {{$message}}
        @enderror
    </span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="password"><span class="text-danger">
        @error('password')
        {{$message}}
        @enderror
    </span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm_Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="password_confirmation"><span class="text-danger">
        @error('password_confirmation')
        {{$message}}
        @enderror
    </span>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endSection