@extends('layouts.master')
@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
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

        @if ($message = Session::get('success'))
          <?php
          echo "<script>alert('$message')</script>";
          ?> 
        @endif
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
            <div class="row">
              <div class="col text-right">
                <a href="{{url('usertable')}}" class="btn btn-secondary content-link btn-sm"> View</a>
              </div>
	          </div>
        </div>
        <div class="card-body">
    <form action="{{url('store')}}" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
      @csrf
      <div class="row">
            
            <div class="col">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" placeholder="Full Name" class="form-control" name="full_name"  required>
                @if ($errors->has('full_name'))
                            <span class="text-danger">{{ $errors->first('full_name') }}</span>
                        @endif
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
            <div class="col">
            <div class="form-group">
                    <label>File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        
                      </div>
                      
                    </div>
                    @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                  </div>
                  </div>
      </div>
      <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Email" class="form-control" name="email"  required>
                @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" placeholder="Mobile Number" class="form-control" name="mobile_no"  required>
                @if ($errors->has('mobile_no'))
                            <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                        @endif
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
      </div>
      <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Address</label>
                <input type="text" placeholder="City" class="form-control" name="address"  required>
                @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" class="form-control" name="password"  required>
                @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
           
      </div>
      <div class="row">
      <div class="col">
              <div class="form-group">
                <label>description</label>
                <textarea type="text" placeholder="description" class="form-control" name="description"  required></textarea>
                @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
                
              </div>
            </div>
      </div>
      <div class="row">
            <div class="col">
              <div class="form-group">
                <button class="btn btn-secondary btn-sm" name="submit">Save</button>
              </div>
            </div>

      </div>
   
    </form>
    </div>
    </div>
  </div>
</div>


    </div>
@endsection