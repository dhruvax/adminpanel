
<?php $__env->startSection('content'); ?>
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
                <a href="<?php echo e(url('userdata')); ?>" class="btn btn-secondary content-link btn-sm">Add User</a>
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
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($data->id); ?></td>
                                <td><?php echo e($data->full_name); ?></td>
                                <td><?php echo e($data->email); ?></td>
                               <!-- <td>
                                  <img src="<?php echo e(asset('assets/img/'.$data->image)); ?>" width="100" height="100">
                                </td>-->
                                <td><?php echo e($data->mobile_no); ?></td>
                                <td><?php echo e($data->address); ?></td>
                                <td>
                                    <a href="<?php echo e(url('editdata')); ?>/<?php echo e($data->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo e(url('deletedata')); ?>/<?php echo e($data->id); ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                <td>
                                  <a href="<?php echo e(url('profile')); ?>/<?php echo e($data->id); ?>" class="text-secondary content-link"><i class='fas fa-eye'></i></a>
                              </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\adminpanel\resources\views/user/usertable.blade.php ENDPATH**/ ?>