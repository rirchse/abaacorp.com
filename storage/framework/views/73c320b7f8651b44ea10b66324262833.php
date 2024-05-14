<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>

<section id="main-banner-page" style="width:100%; height:80px;background:url(/images/banner1-1.jpg)"></section>

<div class="container-fluid">
    <div class="row flex-nowrap">

        <?php echo $__env->make('dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="col py-3" style="background:#eee;height:600px">
            <div class="col-md-8 whitebox">
                <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2">Dashboard
                    </h2>
                </div>
                <div class="widget logincontainer" style="height:400px">
                    <h3 class="darkcolor bottom30 text-center text-lg-start"><?php echo e(ENV('APP_NAME')); ?> Admin Panel </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/www/abaacorp/resources/views/dashboard/index.blade.php ENDPATH**/ ?>