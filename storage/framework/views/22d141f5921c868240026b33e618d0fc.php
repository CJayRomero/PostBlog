

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Edit Post</h1>
    <form action="<?php echo e(route('posts.update', $post)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo e(old('title', $post->title)); ?>" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" id="body" class="form-control" rows="5" required><?php echo e(old('body', $post->body)); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
        <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practicalexam\resources\views/posts/edit.blade.php ENDPATH**/ ?>