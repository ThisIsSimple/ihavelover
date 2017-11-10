<?php $__env->startSection("stylesheets"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/services.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <?php echo $__env->make("navbar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container py-5">
        <p class="h1">Services</p>
        <p class="lead">All the services from us is for you</p>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="card card-features text-white mb-4">
                    <img class="card-img" src="<?php echo e(asset('img/services/index1.jpg')); ?>" alt="Card image">
                    <div class="card-img-overlay">
                        <p class="card-text text-muted">Food</p>
                        <h4 class="card-title">오늘 뭐 먹지?</h4>
                        <p class="card-text">매번 시켜 먹으시겠습니까?</p>
                        <a href="/services/food" class="btn btn-feature">서비스 바로 가기</a>
                    </div>
                </div>
                <div class="card card-features text-white">
                    <img class="card-img" src="<?php echo e(asset('img/services/index2.jpg')); ?>" alt="Card image">
                    <div class="card-img-overlay">
                        <p class="card-text text-muted">Food</p>
                        <h4 class="card-title">오늘 뭐 먹지?</h4>
                        <p class="card-text">매번 시켜 먹으시겠습니까?</p>
                        <a href="/services/food" class="btn btn-feature">서비스 바로 가기</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="card card-features text-white mb-4">
                    <img class="card-img" src="<?php echo e(asset('img/services/index3.jpg')); ?>" alt="Card image">
                    <div class="card-img-overlay">
                        <p class="card-text text-muted">Food</p>
                        <h4 class="card-title">집안의 모든 것</h4>
                        <p class="card-text">관리해봐요 ㅇㅇ</p>
                        <a href="/services/manage" class="btn btn-feature">서비스 바로 가기</a>
                    </div>
                </div>
                <div class="card card-features text-white">
                    <img class="card-img" src="<?php echo e(asset('img/services/index4.jpg')); ?>" alt="Card image">
                    <div class="card-img-overlay">
                        <p class="card-text text-muted">Food</p>
                        <h4 class="card-title">오늘 뭐 먹지?</h4>
                        <p class="card-text">매번 시켜 먹으시겠습니까?</p>
                        <a href="#" class="btn btn-feature">서비스 바로 가기</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>