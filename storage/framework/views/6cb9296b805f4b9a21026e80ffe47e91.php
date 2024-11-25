<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-white dark:text-white leading-tight">
            <?php echo e(__('Latest Posts')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12 dark:bg-black bg-emerald-950">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden max-w-xl justify-center items-center shadow-sm sm:rounded-lg">
                <?php $__currentLoopData = $last; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-6 my-6 flex dark:bg-white bg-white items-center lg:rounded-lg flex-col dark:text-black text-black">
                    <div class="flex-col h-full">
                        <div class="flex justify-between">
                            <div class="flex items-center">
                                <img width="50" height="50" src="../images/CoffeBeainWithShadow.png" alt="logo"/>
                                <h1 class="font-black"><?php echo e(Auth::user()->name); ?></h1>
                            </div>
                            <?php if(Auth::user()->id == 1): ?>
                                <form action="<?php echo e(route('deletePost', $post->id)); ?>" method="GET">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="px-4 py-2 flex bg-red-500 text-black rounded hover:bg-red-600">
                                        <img height="20" width="20" src="../icons/trash.png" alt="deleteIcon"/>
                                    </button>
                                </form>                            
                            <?php endif; ?>
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
    </div>
    <!--Footer container-->
    <footer
    class="flex flex-col items-center bg-zinc-50 text-center text-surface dark:bg-neutral-700 dark:text-white">
        <div class="container px-6 pt-6">
            <!--Copyright section-->
            <div class="w-full bg-black/5 p-4 text-center">
            © 2024 Copyright - 
            <a href="/">Ecafflein</a>
            </div>
        </div>
    </footer>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

<?php /**PATH C:\Users\hp\Desktop\Coffee_Social_App\coffee-app\resources\views/latestPost.blade.php ENDPATH**/ ?>