
<?php $__env->startSection('content'); ?>
    <br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3> Student Detail </h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Firstname:</strong>
                <?php echo e($student->firstname); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lastname:</strong>
                <?php echo e($student->lastname); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Age:</strong>
                <?php echo e($student->age); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="<?php echo e(route('students.index')); ?>"> Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\student_info\resources\views/students/show.blade.php ENDPATH**/ ?>