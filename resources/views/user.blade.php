@extends('layouts.master')
@section('title', 'User List')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

      <div class="card">
        
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <th>No.</th>
              <th>Picture</th>
              <th>Name</th>
              <th>Email</th>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{ $user['id'] }}</td>
                <td><img src="{{ $user['picture'] }}" alt="" height="100px"></td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>

    </section>
  </div>
@endsection