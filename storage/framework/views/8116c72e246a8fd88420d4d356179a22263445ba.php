<div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">Edit provider client</h5>
    <button type="button" class="close" aria-label="Close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#add_provider">Add client</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#add_provider_addition">On log-in actions</a>
    </li>
</ul>
<!-- Блоки с контентом -->
<div class="tab-content">
    <!-- Первый блок (он отображается по умолчанию, т.к. имеет классы show и active) -->
    <div class="tab-pane fade show active" id="add_provider">
        <div class="modal-body">
            <form class="data_form" action="<?php echo e(url('/plugins/oauth2/provider_clients/' . $providerClient->id)); ?>" method="post">
                <?php echo e(method_field('PUT')); ?>

                <div class="form-group">
                    <label for="name">Provider name:</label>
                    <select class="form-control" id="name" name="provider_id" required>
                        <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if($provider->id == $providerClient->provider->id): ?> selected <?php endif; ?> value="<?php echo e($provider->id); ?>"><?php echo e($provider->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="client_id" class="col-form-label">Client ID:</label>
                    <input value="<?php echo e($providerClient->client_id); ?>" type="text" class="form-control" id="client_id" name="client_id" required>
                </div>
                <div class="form-group">
                    <label for="client_secret" class="col-form-label">Client secret:</label>
                    <input value="<?php echo e($providerClient->client_secret); ?>" type="text" class="form-control" id="client_secret" name="client_secret" required>
                </div>
                <div class="form-group">
                    <label for="host" class="col-form-label">Host:</label>
                    <input value="<?php echo e($providerClient->host); ?>" type="text" class="form-control" id="host" name="host">
                </div>
                <div class="form-group">
                    <label for="role_id" class="col-form-label">Default role for a new users:</label>
                    <select class="form-control" id="role_id" name="role_id">
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if($role->id == $providerClient->role_id): ?> selected <?php endif; ?> value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary save_provider_client" data-method="put" data-url="<?php echo e(url('/plugins/oauth2/provider_clients/' . $providerClient->id)); ?>">Save</button>
        </div>
        <script>
            $('.selectpicker').selectpicker();
        </script>
    </div>
    <!-- Второй блок -->
    <div class="tab-pane fade" id="add_provider_addition">
        <div class="modal-body">
            <?php echo $__env->make('oauth2::actions_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary show_add_action_form" data-method="get" data-url="<?php echo e(url('/plugins/oauth2/actions/add')); ?>">Add action</button>
        </div>
    </div>
</div>


<?php /**PATH /var/www/hack.medin.cloud/Modules/Oauth2/Resources/views/edit_provider_form.blade.php ENDPATH**/ ?>