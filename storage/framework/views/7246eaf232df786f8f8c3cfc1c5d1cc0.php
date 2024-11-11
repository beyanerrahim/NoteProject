

<?php $__env->startSection('title'); ?> create <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="container">
    <h3 class="text-center my-3">Create Note Page</h3>
    <form method="POST" action="<?php echo e(route('store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter the title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <textarea name="description" type="text" class="form-control" placeholder="Enter the description"></textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Create Note</button>
    </form>

</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\login_project\resources\views/create.blade.php ENDPATH**/ ?>