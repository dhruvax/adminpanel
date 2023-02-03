
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
<div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Edit</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                      <li class="breadcrumb-item active">Edit</li>
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
                    
                        <div class="text-right">
                        <a href="<?php echo e(url('usertable')); ?>" class="btn btn-danger float-end btn-sm">BACK</a>
                        </div>
                    
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('updatedata')); ?>/<?php echo e($user->id); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="full_name" value="<?php echo e($user->full_name); ?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="<?php echo e($user->email); ?>" class="form-control">
                        </div>
            <div class="form-group mb-3">
                    <label>File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" value="<?php echo e($user->image); ?>" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                 
                        <div class="form-group mb-3">
                            <label for="">mobile no</label>
                            <input type="text" name="mobile_no" value="<?php echo e($user->mobile_no); ?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" value="<?php echo e($user->address); ?>" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" value="<?php echo e($user->description); ?>" class="form-control"></input>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\adminpanel\resources\views/user/editdata.blade.php ENDPATH**/ ?>