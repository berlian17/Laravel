@extends('dashboard.global')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp
    @foreach($data as $data)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$data['name']}}</td>
      <td>{{$data['email']}}</td>
      <td></td>
      <td>
        <a href="" class="btn btn-info">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
        