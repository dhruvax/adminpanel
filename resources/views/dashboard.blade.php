@extends('layouts.master')
@section('content')
<section class="content">
<div class="content-wrapper">
           <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="index1.html">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                          <div class="inner">
                            <h3>User</h3>
            
                            <p>manage users</p>   
                          </div>
                          <div class="icon">
                            <i class="fas fa-users"></i>
                          </div>
                          <a href="{{url('userdata')}}" class="small-box-footer">go to user <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      
                </div>
            </div>
</div>
          </section>
@endsection