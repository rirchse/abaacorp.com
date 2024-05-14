<?php $__env->startSection('title', 'Create New Blog'); ?>
<?php $__env->startSection('content'); ?>

<section id="main-banner-page" style="width:100%; height:80px;background:url(/images/banner1-1.jpg)"></section>

<div class="container-fluid">
    <div class="row flex-nowrap">

        <?php echo $__env->make('dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col py-3" style="background:#eee">

            <?php echo $__env->make('partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

            <div class="col-md-12 whitebox">
                <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2">Dashboard
                    </h2>
                </div>
                <div class="widget logincontainer">
                    <h3 class="darkcolor bottom30 text-center text-lg-start">View Blog 
                        <a class="btn btn-primary" style="float:right;font-size:15px" href="<?php echo e(route('blog.create')); ?>">Create</a>
                    </h3>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Publish Date</th>
                            <th>Status</th>
                            <th>Home</th>
                            <th>Action</th>
                        </tr>
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($blog->id); ?></td>
                            <td><?php echo e($blog->blog_title); ?></td>
                            <td><?php echo e($blog->blog_date); ?></td>
                            <td class="<?php echo e($blog->status == 'Deactive' ? 'text-danger' : 'text-success'); ?>">
                                <?php echo e($blog->status); ?>

                            </td>
                            <td class="<?php echo e($blog->home == 'No' ? 'text-danger' : 'text-success'); ?>">
                                <?php echo e($blog->home); ?>

                            </td>
                            <td>
                                <a class="text-warning" style="float:left" href="<?php echo e(route('blog.edit', $blog->id)); ?>"><i class="fa fa-edit"></i></a>
                                <form style="width:10px;float:left" action="<?php echo e(route('blog.destroy', $blog->id)); ?>" method="POST">
                                <?php echo method_field('delete'); ?> <?php echo csrf_field(); ?> 
                                <button type="submit" class="text-danger" style="background:none" onclick="return confirm('Are you sure, you want to delete the blog?')"><i class="fa fa-trash"></i></button></form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php echo $blogs->withQueryString()->links('pagination::bootstrap-5'); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/www/solutiongrid/resources/views/dashboard/blog/view.blade.php ENDPATH**/ ?>