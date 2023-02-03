
<?php $__env->startSection('content'); ?>
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

        <?php if($message = Session::get('success')): ?>
          <?php
          echo "<script>alert('$message')</script>";
          ?> 
        <?php endif; ?>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
            <div class="row">
              <div class="col text-right">
                <a href="<?php echo e(url('usertable')); ?>" class="btn btn-secondary content-link btn-sm"> View</a>
              </div>
	          </div>
        </div>
        <div class="card-body">
    <form action="<?php echo e(url('store')); ?>" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
      <?php echo csrf_field(); ?>
      <div class="row">
            
            <div class="col">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" placeholder="Full Name" class="form-control" name="full_name"  required>
                <?php if($errors->has('full_name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('full_name')); ?></span>
                        <?php endif; ?>
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
                    <?php if($errors->has('image')): ?>
                            <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                        <?php endif; ?>
                  </div>
                  </div>
      </div>
      <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Email" class="form-control" name="email"  required>
                <?php if($errors->has('email')): ?>
                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" placeholder="Mobile Number" class="form-control" name="mobile_no"  required>
                <?php if($errors->has('mobile_no')): ?>
                            <span class="text-danger"><?php echo e($errors->first('mobile_no')); ?></span>
                        <?php endif; ?>
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
                <?php if($errors->has('address')): ?>
                            <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                        <?php endif; ?>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" class="form-control" name="password"  required>
                <?php if($errors->has('password')): ?>
                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                        <?php endif; ?>
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
                <?php if($errors->has('description')): ?>
                            <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
                        <?php endif; ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\adminpanel\resources\views/user/userdata.blade.php ENDPATH**/ ?>