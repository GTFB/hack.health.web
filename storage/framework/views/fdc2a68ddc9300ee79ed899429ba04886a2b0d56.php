<?php if($providerClients->isEmpty()): ?>
    <span>Please, add a new client.</span>
<?php else: ?>
<table class="table table-hover table-sm">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Provider</th>
        <th scope="col">Client ID</th>
        <th scope="col">Client Secret</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $providerClients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td style="color: #9561e2"><?php echo e($client->id); ?></td>
            <td><?php echo e($client->provider->name); ?></td>
            <td><?php if(mb_strlen($client->client_id) > 15): ?> <?php echo e(substr($client->client_id, 0, 15) . '...'); ?> <?php else: ?> <?php echo e($client->client_id); ?> <?php endif; ?></td>
            <td style="color: #f66d9b"><?php if(mb_strlen($client->client_secret) > 60): ?> <?php echo e(substr($client->client_secret, 0, 60) . '...'); ?> <?php else: ?> <?php echo e($client->client_secret); ?> <?php endif; ?></td>
            <td>
                <span class="edit_provider_client" style="text-decoration: none; color: #3490dc; cursor: pointer" data-method="get" data-url="<?php echo e(url('/plugins/oauth2/provider_clients/edit/' . $client->id)); ?>"><span style="font-size: 15px" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
            </td>
            <td>
                <span class="delete_provider_client" style="text-decoration: none; color: #e3342f; cursor: pointer" data-method="delete" data-url="<?php echo e(url('/plugins/oauth2/provider_clients/' . $client->id)); ?>"><span style="font-size: 15px" class="glyphicon glyphicon-remove" aria-hidden="true"></span></span>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php endif; ?>
<?php /**PATH /var/www/hack.medin.cloud/Modules/Oauth2/Resources/views/client_table.blade.php ENDPATH**/ ?>