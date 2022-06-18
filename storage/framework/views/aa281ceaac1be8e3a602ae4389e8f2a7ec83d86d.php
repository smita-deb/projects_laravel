
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create Student</h2>
            </div>
        </div>
    </div>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
        <strong>Whoops!</strong> something we are problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('students.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Firstname:</strong>
                    <input type="text" name="firstname" class="form-control" placeholder="First name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lastname:</strong>
                    <input type="text" name="lastname" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Age:</strong>
                <input type="number" min="1" name="age" class="form-control" placeholder="Age">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="<?php echo e(route('students.index')); ?>"> Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\student_info\resources\views/students/create.blade.php ENDPATH**/ ?>