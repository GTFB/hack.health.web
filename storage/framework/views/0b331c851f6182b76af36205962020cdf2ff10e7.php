<?php if($providers->isEmpty()): ?>
    <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Install new provider</h5>
        <button type="button" class="close" aria-label="Close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <span>All providers are installed.</span>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
    </div>
<?php else: ?>
<div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">Install new provider</h5>
    <button type="button" class="close" aria-label="Close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form class="data_form" action="<?php echo e(url('/plugins/oauth2/providers')); ?>" method="post">
        <?php echo e(method_field('PUT')); ?>

        <div class="form-group">
            <label for="name">Provider name:</label>
            <select class="form-control" id="name" name="provider_id" required>
                <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($provider->id); ?>"><?php echo e($provider->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary install_provider" data-method="put" data-url="<?php echo e(url('/plugins/oauth2/providers')); ?>">Install</button>
</div>
<?php endif; ?>

<?php /**PATH /var/www/hack.medin.cloud/Modules/Oauth2/Resources/views/install_provider_form.blade.php ENDPATH**/ ?>