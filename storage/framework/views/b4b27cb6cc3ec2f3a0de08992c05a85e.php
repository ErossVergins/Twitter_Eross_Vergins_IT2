<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<div class="row">
    <form action="/posts" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <textarea class="form-control" name="content" id="idea" rows="3" placeholder="What's happening?" style="resize: none;"></textarea>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Tweet</button>
        </div>
    </form>
</div><?php /**PATH C:\Users\eross\OneDrive\Dators\Homework 8\twitter\resources\views/shared/submit-idea.blade.php ENDPATH**/ ?>