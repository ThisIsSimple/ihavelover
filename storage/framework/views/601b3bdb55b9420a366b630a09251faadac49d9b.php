<?php $__env->startSection("stylesheets"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <?php echo $__env->make("navbar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-6 row">
                <div class="col-12">
                    <div class="card">
                        <img class="card-img" src="..." alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <img class="card-img" src="..." alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <img class="card-img" src="..." alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 row">
                <div class="col-6">
                    <div class="card">
                        <img class="card-img" src="..." alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <img class="card-img" src="..." alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <img class="card-img" src="..." alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>