
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
<div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="index1.html">Home</a></li>
                      <li class="breadcrumb-item active">profile</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>

            <div class="container-fluid">
            <div class="row">
            <?php echo csrf_field(); ?>
            
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card"> <img class="card-img" src="<?php echo e(url('assets/img/laravel1.jpeg')); ?>" height="450" alt="Card image">
                            <div class="card-img-overlay card-inverse text-white social-profile d-flex no-block">
                                <div class="align-self-center"> 
                                    <img src="<?php echo e(url('assets/img')); ?>/<?php echo e($user->image); ?>" class="img-circle d-block" width="100" height="100">
                                    
                                <h4 class="card-title text-white"><?php echo e($user->full_name); ?></h4></br><br>
                                    <small class="text-muted p-t-30 db">Social Profile</small>
                                <br>
                                <button class="btn btn-circle btn-primary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-info"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-danger"><i class="fab fa-youtube"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">

                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="<?php echo e(url('#profile')); ?>" role="tab" aria-selected="true">Profile</a> </li>
                        
                            </ul>
                            
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted"><?php echo e($user->full_name); ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted"><?php echo e($user->mobile_no); ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?php echo e($user->email); ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted"><?php echo e($user->address); ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30"><?php echo e($user->description); ?></p>   
                                        <div class="col text-right">
                <a href="<?php echo e(url('editdata')); ?>/<?php echo e($user->id); ?>" class="btn btn-secondary content-link btn-sm">update profile</a>
                <a href="<?php echo e(url('usertable')); ?>" class="btn btn-danger float-end btn-sm">BACK</a>
              </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              
                </div>
            </div>
                    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\adminpanel\resources\views/user/profile.blade.php ENDPATH**/ ?>