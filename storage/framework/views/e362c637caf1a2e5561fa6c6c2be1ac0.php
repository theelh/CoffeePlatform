<section>
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden max-w-xl justify-center items-center shadow-sm sm:rounded-lg">
            <?php $__currentLoopData = $userPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="p-6 my-6 flex dark:bg-white bg-white items-center lg:rounded-lg flex-col dark:text-black text-black">
                <div class="flex-col h-full">
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <img width="50" height="50" src="../images/CoffeBeainWithShadow.png" alt="logo"/>
                            <h1 class="font-black"><?php echo e(Auth::user()->name); ?></h1>
                        </div>
                        <a class="text-black text-sm dark:text-black" href="<?php echo e(url('deletePost',$post->id)); ?>"><img width="25" height="25" src="../icons/trash.png" alt="removeicon"/></a>
                    </div>
                    <h2 class="text-xl"><?php echo e($post->title); ?></h2>
                    <p class="text-xs mb-6 mt-2 text-gray-400">created at - <?php echo e($post->created_at); ?></p>
                    <img class="rounded-e-lg" width="300" height="300" src="/images/<?php echo e($post->image); ?>" alt="post img"/>
                    <h2 class="py-6 text-sm text-gray-800"><?php echo e($post->description); ?></h2>
                </div>
            </div>
            <div class="border-t mt-1"/>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH C:\Users\hp\Desktop\Coffee_Social_App\coffee-app\resources\views/profile/partials/userPost.blade.php ENDPATH**/ ?>