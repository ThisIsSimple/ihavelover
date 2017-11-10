<?php $__env->startSection("stylesheets"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <?php echo $__env->make("navbar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container py-5">
        <p class="h1">New Lifestyle.</p>
        <p class="lead text-muted">WE suggest you a new lifestyle with latest IT technologies</p>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 col-md-12 mb-4">
                        <div class="card card-features text-white">
                            <img class="card-img" src="<?php echo e(asset('img/main/features1.jpg')); ?>" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Food</p>
                                <h4 class="card-title">오늘 뭐 먹지?</h4>
                                <p class="card-text">매번 시켜 먹으시겠습니까?</p>
                                <a href="#" class="btn btn-feature">서비스 바로 가기</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card card-features">
                            <img class="card-img" src="<?php echo e(asset('img/main/features2.jpg')); ?>" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Food</p>
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card card-features">
                            <img class="card-img" src="<?php echo e(asset('img/main/features3.jpg')); ?>" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Food</p>
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card card-features">
                            <img class="card-img" src="<?php echo e(asset('img/main/features4.jpg')); ?>" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Food</p>
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card card-features">
                            <img class="card-img" src="<?php echo e(asset('img/main/features5.jpg')); ?>" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Food</p>
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 mb-4">
                        <div class="card card-features">
                            <img class="card-img" src="<?php echo e(asset('img/main/features6.jpg')); ?>" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="card-text text-muted">Food</p>
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>