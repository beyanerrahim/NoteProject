

<?php $__env->startSection('title'); ?> edit <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="container">
    <h3 class="text-center my-3">Edit Page</h3>
    <form method="POST" action="<?php echo e(route('update' , $note->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter the title" value="<?php echo e($note->title); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <textarea name="description" type="text" class="form-control" placeholder="Enter the description"> <?php echo e($note->description); ?></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Edit Note</button>
    </form>

</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\login_project\resources\views/edit.blade.php ENDPATH**/ ?>