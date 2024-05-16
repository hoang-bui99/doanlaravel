<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
.container h1{
  text-align: center; 
  padding-bottom: 50px;  
}
</style>
<body>
  
</body>
</html>

@extends('layouts.header')

@section('content')
  <div class="container">
    <h1>Contact Us</h1>
    <form class="row g-3">
      <div class="col-md-6">
        <label for="inputText" class="form-label">First Name</label>
        <input type="text" class="form-control">
      </div>
      <div class="col-md-6">
        <label for="inputText" class="form-label">Last Name</label>
        <input type="text" class="form-control">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Email</label>
        <input type="Email" class="form-control" id="inputEmail">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Phone Number</label>
        <input type="number" class="form-control">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
    </form>
  </div>
@endsection
