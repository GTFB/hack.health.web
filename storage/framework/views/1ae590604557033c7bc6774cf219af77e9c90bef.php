<?php if($providers->isEmpty()): ?>
    <span>Providers not found, please, install new provider.</span>
<?php else: ?>
<table class="table table-hover table-sm">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Redirect URI</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($provider->id); ?></td>
            <td><?php echo e($provider->name); ?></td>
            <td><?php echo e($provider->redirect_uri); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php endif; ?>
<?php /**PATH /var/www/hack.medin.cloud/Modules/Oauth2/Resources/views/providers_table.blade.php ENDPATH**/ ?>