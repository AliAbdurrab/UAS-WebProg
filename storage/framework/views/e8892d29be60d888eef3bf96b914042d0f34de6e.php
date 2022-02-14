<?php $__env->startSection('container'); ?>
    <style>
        #bg-img{
            height: 50rem;
            background-size: cover;
            background-image: url(<?php echo e(URL::asset('images/background/bgbook.jpg')); ?>);
        }
        
    </style>

    <?php if(auth()->guard()->check()): ?>
        <div class="container py-5 px-5 table-content my-5">
            <h2 class="text-center mb-5"> <?php echo e(__('this is our E-Book list')); ?> </h2>
            <table class="table table-light">
                <thead class="thead-dark">
                    <tr>
                      <th scope="col"> <?php echo e(__('Author')); ?></th>
                      <th scope="col"> <?php echo e(__('Title')); ?> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $listEbook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($item->author); ?> </td>
                            <td> <a href="/ebook-detail/<?php echo e($item->ebook_id); ?>"><?php echo e($item->title); ?></a></td>
                        </tr>    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div id="bg-img" class="d-flex flex-column align-items-center justify-content-center text-center h-10">
            <h2 class="title-center text-dark"> <?php echo e(__('choose and rent your e-book now!!')); ?> </h2>
            <h5 class="text-dark"> <?php echo e(__('this is the biggest place for you to rent your e-book')); ?></h5>
            <h5 class="text-dark"> <?php echo e(__('Designed by Ali Abdurrab - 2301926996')); ?></h5>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UAS -UTS\webprog\uas\UAS_WP_2301935501\AmazingE-Book\resources\views/homepage.blade.php ENDPATH**/ ?>