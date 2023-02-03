
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
<div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Edit Profile</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                      <li class="breadcrumb-item active">Edit profile</li>
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
                        <a href="<?php echo e(url('profile')); ?>" class="btn btn-danger float-end btn-sm">BACK</a>
                        </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('profstore')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        
                        
                        <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                        <div class="form-group mb-3">
                            <label for="">name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">mobile</label>
                            <input type="text" name="mobile"  class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">location</label>
                            <input type="text" name="location" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">description</label>
                            <textarea type="text" name="description" class="form-control"></textarea>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\adminpanel\resources\views/user/editprofile.blade.php ENDPATH**/ ?>