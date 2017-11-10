<?php $__env->startSection("stylesheets"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/services.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("temperatureChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <?php echo $__env->make("navbar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="<?php echo e(asset('img/services/manage1.jpg')); ?>" alt="profile" class="img-thumbnail img-profile mb-3">
                        <h4 class="card-title">전윤민</h4>
                        <h6 class="card-subtitle text-muted">@cordelia273</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 mb-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Temperature</h4>
                        <h6 class="card-subtitle text-muted">@cordelia273</h6>
                        <canvas id="temperatureChart" width="400" height="200"></canvas>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Humidity</h4>
                        <h6 class="card-subtitle text-muted"><?php echo date("H:i:s") ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Gas</h4>
                        <h6 class="card-subtitle text-muted">@cordelia273</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>