@extends('layouts.master')
@section('content')
<div class="content-wrapper">
<div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                      <li class="breadcrumb-item active">User</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
            <div class="row">
              <div class="col text-right">
                <a href="{{url('userdata')}}" class="btn btn-secondary content-link btn-sm">Add User</a>
              </div>
	          </div>
        </div>
                <div class="card-body">

                    <table id="table" class="table table-responsive-sm table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full name</th>
                                <th>Email</th>
                                <!--<th>image</th>-->
                                <th>mobile</th>
                                <th>address</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>view</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->full_name }}</td>
                                <td>{{ $data->email }}</td>
                               <!-- <td>
                                  <img src="{{asset('assets/img/'.$data->image)}}" width="100" height="100">
                                </td>-->
                                <td>{{ $data->mobile_no }}</td>
                                <td>{{ $data->address }}</td>
                                <td>
                                    <a href="{{url('editdata')}}/{{$data->id}}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{url('deletedata')}}/{{$data->id}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                <td>
                                  <a href="{{url('profile')}}/{{$data->id}}" class="text-secondary content-link"><i class='fas fa-eye'></i></a>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection