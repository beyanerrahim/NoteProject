<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.bundle.min.js')); ?>">
    

    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>

    <nav class="navbar">
        <ul class="navbar-links">
        <li ><a class="boldline" href="#">NOTEBOOK</a></li>
        <li><a href="<?php echo e(route('home')); ?>">All Notes</a></li>
        </ul>
       
       
        <div class="" style="color: #fff">
            Welcome <?php echo e(Auth::user()->name); ?>

        </div>
       <div class="create-note">
            <a class="btn btn-outline-light btn-style" href="<?php echo e(route('createNote')); ?>"><span><i class="fas fa-plus"></i> Add Your Note </span></a>
       
       </div>
        <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex" role="search">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

           
            <button class="btn btn-danger" style="width:100px;" type="submit">Logout</button>
        </form>

       
    
    </nav>
    



    <?php echo $__env->yieldContent('content'); ?>





    <script src="js/jquery-3.7.1.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/all.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\login_project\resources\views/layouts/app.blade.php ENDPATH**/ ?>