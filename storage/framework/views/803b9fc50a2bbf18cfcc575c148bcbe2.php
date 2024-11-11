

<?php $__env->startSection('title'); ?> index <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>





 <!-- Navbar -->
   
    
    <div class="container">
        <h3 class="text-center my-3">My Notes</h3>

        <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <div class="card mt-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                        <!-- Title on the right -->
                    <div class="ms-auto"><?php echo e($note->title); ?></div>
                    <div>
                        <a href="<?php echo e(route('edit', $note->id)); ?>" class="link1"><i class="fas fa-edit mx-1"></i></a>

                        <form action="<?php echo e(route('destroy', $note->id)); ?>" method="POST" class="link1">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn-delete"><i class="fas fa-trash mx-1" style="color:#696d6b; "></i></button>

                       </form>
                        
                        
                    </div>
                    
                    
                </div>
                <div class="card-body">
                <p class="card-text"><?php echo e($note->description); ?></p>
                <div class="note-date-div">
                    <span class="note-date"><?php echo e($note->created_at); ?></span>
                </div>
                </div>
             
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
</div>








 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\login_project\resources\views/home.blade.php ENDPATH**/ ?>