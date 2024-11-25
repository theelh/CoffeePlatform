<form method="POST" action="<?php echo e(url('dashboard/insert_image')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div>
        <div>
            <label >
                Enter a title
            </label>
            <div>
                <input type="text" name="user_name"/>
                <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>
    <div>
        <div>
            <label >
                select your post image
            </label>
            <div>
                <input type="file" name="user_image"/>
            </div>
        </div>
    </div>
    <div>
        <div>
            <label >
                Describe your post
            </label>
            <div>
                <input type="text" name="description"/>
            </div>
        </div>
    </div>
    <div>
        <div>
            <div class="gap-3 cursor-pointer">
                <input type="submit" name="dashboard" value="Submit"/>
            </div>
        </div>
    </div>
</form><?php /**PATH C:\Users\hp\Desktop\Coffee_Social_App\coffee-app\resources\views/components/postForm.blade.php ENDPATH**/ ?>